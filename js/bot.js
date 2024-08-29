document.addEventListener('DOMContentLoaded', () => {
    document.getElementById('fetchData').addEventListener('click', () => {
        fetch('https://jsonplaceholder.typicode.com/posts')
            .then(response => response.json())
            .then(data => {
                const dataDiv = document.getElementById('data');
                dataDiv.innerHTML = '';
                data.forEach(post => {
                    const postDiv = document.createElement('div');
                    postDiv.classList.add('post');
                    postDiv.innerHTML = `<h3>${post.title}</h3><p>${post.body}</p>`;
                    dataDiv.appendChild(postDiv);
                });
            })
            .catch(error => console.error('Error fetching data:', error));
    });
});
