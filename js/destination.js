(function () {
  alert("Script chargé !");
  console.log("destination.js OK");

  const domaine = window.location.href 
  const categoryId = 3; // ID de la catégorie souhaitée
  const apiUrl = `${domaine}wp-json/wp/v2/posts?categories=${categoryId}`;

  console.log("API URL utilisée :", apiUrl);

  fetch(apiUrl)
    .then((response) => response.json())
    .then((data) => {
      const destinationList = document.querySelector(".destination__list");

      if (!destinationList) {
        console.error("Élément .destination__list introuvable !");
        return;
      }

      data.forEach((article) => {
        const articleElement = document.createElement("div");
        articleElement.innerHTML = `
          <h3>${article.title.rendered}</h3>
          <div>${article.excerpt.rendered}</div>
          <a href="${article.link}">Lire plus</a>
        `;
        destinationList.appendChild(articleElement);
      });
    })
    .catch((error) =>
      console.error("Erreur lors de la récupération des articles:", error)
    );
})();

