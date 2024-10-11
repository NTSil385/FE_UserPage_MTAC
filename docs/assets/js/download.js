document.getElementById('downloadBtn').addEventListener('click', function () {

    const pdfSource = document.querySelector('._df_book').getAttribute('source');
    
    // Lấy tên file từ URL (sau dấu '/')
    const fileName = pdfSource.substring(pdfSource.lastIndexOf('/') + 1);

    // Tạo thẻ a tạm thời để tải file
    const link = document.createElement('a');
    link.href = pdfSource; // Đặt URL file PDF
    link.download = fileName; 
    link.click(); // Tự động click để tải file
  });