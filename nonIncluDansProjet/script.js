
let body = document.querySelector('body')

let mainDivCatalogs = document.createElement('div');
    mainDivCatalogs.classList.add('divCatalogs');
    body.appendChild(mainDivCatalogs);


let divCatalogMolded = document.createElement('div');
let imgMoldedNode = document.createElement('img');
let titleCatalogMolded = document.createElement('h5');
let titleCatalogMoldedText = document.createTextNode('Bougie moulée');
 
    imgMoldedNode.src = '/img/moule.jpg';
    divCatalogMolded.classList.add('moldedCatalogNode');
    divCatalogMolded.appendChild(imgMoldedNode);
    divCatalogMolded.appendChild(titleCatalogMolded);
    titleCatalogMolded.appendChild(titleCatalogMoldedText);
    mainDivCatalogs.appendChild(divCatalogMolded);

let divCatalogPoured = document.createElement('div');
let imgPouredNode = document.createElement('img');
let titleCatalogPoured = document.createElement('h5');
let titleCatalogPouredText = document.createTextNode('Bougie coulée');
    imgPouredNode.src = '/img/coule.jpg';
    divCatalogPoured.classList.add('pouredCatalogNode');
    divCatalogPoured.appendChild(imgPouredNode);
    divCatalogPoured.appendChild(titleCatalogPoured);
    titleCatalogPoured.appendChild(titleCatalogPouredText);
    mainDivCatalogs.appendChild(divCatalogPoured);


let divCatalogFondant = document.createElement('div');
let imgFondantNode = document.createElement('img');
let titleCatalogFondant = document.createElement('h5');
let titleCatalogFondantText = document.createTextNode('Fondants');
    imgFondantNode.src = '/img/fondant.jpg';
    divCatalogFondant.classList.add('fondantCatalogNode');
    divCatalogFondant.appendChild(imgFondantNode);
    divCatalogFondant.appendChild(titleCatalogFondant);
    titleCatalogFondant.appendChild(titleCatalogFondantText);
    mainDivCatalogs.appendChild(divCatalogFondant);