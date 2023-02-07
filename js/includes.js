fetch('./components/head.html')
    .then(response => {
        return response.text()
    })
    .then(data => {
        document.querySelector('head').innerHTML = data;
});

fetch('./components/header.html')
    .then(response => {
        return response.text()
    })
    .then(data => {
        document.querySelector('header').innerHTML = data;
});

fetch('./components/footer.html')
    .then(response => {
        return response.text()
    })
    .then(data => {
        document.querySelector('footer').innerHTML = data;
});