import request from './../../utils/request.js';
import InfoForm from './../../utils/InfoForm.js';
import Banner from './../components/Banner.js';





// let test = document.getElementById('test');
// test.addEventListener('click', () => {
//     const container = document.getElementById('container');
//     new InfoForm(container).init();
// }, false);




// console.log(request({
//     url: '../api/test.php',
//     begin:()=>{
//         // let a = setInterval(()=>{
//         //     console.log(1);
//         // },500);
//     },
//     finish:() => {
//         // clearInterval(a);
//     }
// }).then(
//     res => {console.log(res);},
//     msg => {console.log('error:' + msg);}
// ).finally(() => {
//     console.log('finally');
// }));

const banner = document.getElementsByClassName('J_wrap')[0];
// console.log(banner.getElementsByTagName('li'));
new Banner(banner).init();
