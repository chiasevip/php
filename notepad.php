function saveContent() {
  var request = new XMLHttpRequest();
  request.open("POST", "https://chiasevip.github.io/php/notepad.php", true);
  request.setRequestHeader("Content-Type", "application/x-www-form-urlencoded; charset=UTF-8");
  request.onload = function () {
    if (request.readyState === 4 && request.status === 200) {
      // Lưu trữ thành công, xử lý kết quả phản hồi từ máy chủ (nếu có)
    }
  };
  request.onerror = function () {
    // Xử lý lỗi khi gửi dữ liệu lưu trữ đến máy
