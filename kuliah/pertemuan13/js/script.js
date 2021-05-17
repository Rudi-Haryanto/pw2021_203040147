const tombolCari = document.querySelector('.tombol-cari');
const keyword = document.querySelector('.keyword');
const container = document.querySelector('.container');

// hilangkan tombol cari
tombolCari.style.display = 'none';

// event ketika kita menuliskan keyword
keyword.addEventListener('keyup', function () {
  // ajak

  // xmlhttprequest
  // const xhr = new XMLHttpRequest();

  // xhr.onreadystatechange = function () {
  //   if (XPathEvaluator.readyState == 4 && xhr.status == 200) {
  //     container.innerHTML = xhr.responseText;
  //   }
  // };

  // xhr.open('get', 'ajak/ajak_cari.php?keyword=' + keyword.value);
  // xhr.send();

  // fetch()
  fetch('ajak/ajak_cari.php?keyword=' + keyword.value)
    .then((response) => response.text())
    .then((response) => (container.innerHTML = response));
});