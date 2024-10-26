document.addEventListener('DOMContentLoaded', function() {
    // Biểu đồ tròn
    var ctxPie = document.getElementById('pieChart').getContext('2d');
    var pieChart = new Chart(ctxPie, {
        type: 'pie',
        data: {
            labels: ['Hợp đồng mới', 'Đang thực hiện', 'Sắp hết hạn', 'Đã kết thúc'],
            datasets: [{
                data: [50, 100, 30, 20],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.8)',
                    'rgba(54, 162, 235, 0.8)',
                    'rgba(255, 206, 86, 0.8)',
                    'rgba(75, 192, 192, 0.8)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            plugins: {
                title: {
                    display: true,
                    text: 'Phân loại hợp đồng'
                }
            }
        }
    });

    // Biểu đồ cột
    var ctxBar = document.getElementById('barChart').getContext('2d');
    var barChart = new Chart(ctxBar, {
        type: 'bar',
        data: {
            labels: ['Tháng 1', 'Tháng 2', 'Tháng 3', 'Tháng 4', 'Tháng 5', 'Tháng 6'],
            datasets: [{
                label: 'Doanh thu (triệu đồng)',
                data: [1200, 1900, 3000, 5400, 1800, 4000],
                backgroundColor: 'rgba(75, 192, 192, 0.6)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true,
                    title: {
                        display: true,
                        text: 'Doanh thu (triệu đồng)'
                    }
                },
                x: {
                    title: {
                        display: true,
                        text: 'Tháng'
                    }
                }
            },
            plugins: {
                title: {
                    display: true,
                    text: 'Doanh thu theo tháng'
                },
                legend: {
                    display: false
                }
            }
        }
    });
});
// Thêm hiệu ứng số đếm
const countElements = document.querySelectorAll('.info-card .display-6');
countElements.forEach(el => {
    const target = parseInt(el.innerText);
    let count = 0;
    const duration = 2000; // 2 giây
    const increment = target / (duration / 16); // 60fps
    
    const counter = setInterval(() => {
        count += increment;
        if (count >= target) {
            clearInterval(counter);
            el.innerText = target.toLocaleString();
        } else {
            el.innerText = Math.round(count).toLocaleString();
        }
    }, 16);
});

document.addEventListener('DOMContentLoaded', function() {
    const carousel = new bootstrap.Carousel(document.getElementById('tipContainer'), {
      interval: 5000,
      wrap: true
    });
  
    document.getElementById('prevTip').addEventListener('click', function() {
      carousel.prev();
    });
  
    document.getElementById('nextTip').addEventListener('click', function() {
      carousel.next();
    });
  });
  
  
  
  document.getElementById('currentDate').textContent = new Date().toLocaleDateString('vi-VN', { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' });
  function updateClock() {
      const now = new Date();
      const digitalClock = document.getElementById('digital-clock');
      const date = document.getElementById('date');
      
      digitalClock.textContent = now.toLocaleTimeString('vi-VN', { hour: '2-digit', minute: '2-digit', second: '2-digit' });
      date.textContent = now.toLocaleDateString('vi-VN', { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' });
  }
  
  setInterval(updateClock, 1000);
  updateClock();
  
  async function fetchWeatherData() {
      const apiKey = '916e7c814425dcf1bc50661e5fba35c7'; // Thay thế bằng API key của bạn
  
      function getLocation() {
          return new Promise((resolve, reject) => {
              if (!navigator.geolocation) {
                  reject(new Error('Trình duyệt không hỗ trợ geolocation'));
              } else {
                  navigator.geolocation.getCurrentPosition(resolve, reject);
              }
          });
      }
  
      async function getLocationName(lat, lon) {
          const response = await fetch(`https://nominatim.openstreetmap.org/reverse?format=json&lat=${lat}&lon=${lon}&zoom=18&addressdetails=1`);
          const data = await response.json();
          const address = data.address;
          return `${address.road || ''}, ${address.suburb || ''}, ${address.city || address.town || address.village || ''}`.trim();
      }
  
      try {
          const position = await getLocation();
          const lat = position.coords.latitude;
          const lon = position.coords.longitude;
          
          const [weatherData, locationName] = await Promise.all([
              fetch(`https://api.openweathermap.org/data/2.5/weather?lat=${lat}&lon=${lon}&appid=${apiKey}&units=metric&lang=vi`).then(res => res.json()),
              getLocationName(lat, lon)
          ]);
  
          const temperature = Math.round(weatherData.main.temp);
          const humidity = weatherData.main.humidity;
          const description = weatherData.weather[0].description;
          const iconCode = weatherData.weather[0].icon;
  
          document.getElementById('temperature').textContent = `${temperature}°C`;
          document.getElementById('humidity').textContent = `Độ ẩm: ${humidity}%`;
          document.getElementById('location').textContent = `Vị trí: ${locationName}`;
          
          const weatherIcon = document.querySelector('.bx.fs-1.me-3');
          weatherIcon.className = 'bx fs-1 me-3';
          switch(iconCode.substr(0, 2)) {
              case '01': weatherIcon.classList.add('bx-sun'); break;
              case '02':
              case '03':
              case '04': weatherIcon.classList.add('bx-cloud'); break;
              case '09':
              case '10': weatherIcon.classList.add('bx-cloud-rain'); break;
              case '11': weatherIcon.classList.add('bx-cloud-lightning'); break;
              case '13': weatherIcon.classList.add('bx-cloud-snow'); break;
              case '50': weatherIcon.classList.add('bx-water'); break;
              default: weatherIcon.classList.add('bx-cloud');
          }
  
          // Ẩn biểu tượng loading
          document.querySelector('.bx-loader-alt').style.display = 'none';
  
          console.log('Dữ liệu thời tiết:', weatherData);
      } catch (error) {
          console.error('Lỗi khi lấy dữ liệu thời tiết:', error);
          document.getElementById('temperature').textContent = 'Không có dữ liệu';
          document.getElementById('humidity').textContent = 'Không có dữ liệu';
          document.getElementById('location').textContent = 'Không thể xác định vị trí';
          const weatherIcon = document.querySelector('.bx.fs-1.me-3');
          weatherIcon.className = 'bx bx-error-circle fs-1 me-3';
          
          // Ẩn biểu tượng loading trong trường hợp lỗi
          document.querySelector('.bx-loader-alt').style.display = 'none';
      }
  }
  
  document.addEventListener('DOMContentLoaded', fetchWeatherData);
  