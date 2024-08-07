document.addEventListener('DOMContentLoaded', function() {
    var carousel = document.querySelector('#carouselExampleIndicators');
    var indicators = document.querySelectorAll('.carousel-indicators button');

    carousel.addEventListener('slide.bs.carousel', function(event) {
        var toIndex = event.to;
        
        // Thêm lớp 'completed' cho các chỉ báo trước và bao gồm chỉ báo hiện tại
        indicators.forEach(function(indicator, index) {
            if (index <= toIndex) {
                indicator.classList.add('completed');
            } else {
                indicator.classList.remove('completed');
            }
        });

        // Xử lý riêng chỉ báo hiện tại
        indicators.forEach(function(indicator) {
            indicator.classList.remove('active');
        });
        indicators[toIndex].classList.add('active');
    });

    // Đảm bảo rằng lớp 'completed' được đặt ban đầu
    indicators.forEach(function(indicator, index) {
        if (indicator.classList.contains('active')) {
            for (var i = 0; i <= index; i++) {
                indicators[i].classList.add('completed');
            }
        }
    });
});
