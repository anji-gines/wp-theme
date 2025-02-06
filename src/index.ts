import './scss/index.scss';
import { gsap } from 'gsap';
import { test } from './ts/test';

console.log('Hello World');

console.log(JSON.stringify(test()));
gsap.to('.box', { x: 100, duration: 1 });
