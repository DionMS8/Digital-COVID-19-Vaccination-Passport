const pokeId = prompt('Please enter your favourite number to see your Pokemon:');

const apiData = {
    url: 'https://api.covid19api.com/live/country/south-africa',
    type: 'pokemon',
    id: pokeId
}

//apiData.id = prompt('Please enter your favourite number to see your Pokemon:')

// DECONSTRUCTION
const {url, type, id} = apiData;
const apiUrl = `${url}${type}/${id}`

// const apiUrl = `${apiData.url}${apiData.type}/${apiData.id}`
//console.log(apiUrl);

fetch(apiUrl)
    .then(data => data.json())
    .then(pokemon => generateHtml(pokemon))

// THE DATA WILL NO BE HELD IN A PROMISE //

// generateHtml IS A HIGH-ORDER FUNCTION

const generateHtml = (data)=> {

    console.log(data);

    const newHtml = `
    <div class="name">${data.name}</div>
    <img id = "pokeimg" src=${data.sprites.front_default}>
    <div class="details">
        <span>Height: ${data.height}</span>
        <span>Weight: ${data.weight}</span>
    </div>
    `

    const pokeDiv = document.querySelector('.pokemon');

    pokeDiv.innerHTML = newHtml;

}
