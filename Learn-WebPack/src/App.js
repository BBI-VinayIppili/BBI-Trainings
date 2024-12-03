import {Other} from './Other';
import "./style.css";
console.warn(Other());


const imageSrc = require("../assets/webpacklogo.png");
let imgContainer = document.getElementById('img-container');

let img = document.createElement('img');
img.src = imageSrc;
img.height = 90;
img.width = 300;
imgContainer.appendChild(img);

console.warn('Image successfully added!');
