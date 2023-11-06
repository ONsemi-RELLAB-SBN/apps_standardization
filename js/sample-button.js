/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Other/javascript.js to edit this template
 */

const successBtnElement = document.querySelector(".js_success-animation-trigger");
const failBtnElement = document.querySelector(".js_fail-animation-trigger");
const pendingClassName = "loading-btn--pending";
const successClassName = "loading-btn--success";
const failClassName = "loading-btn--fail";
const stateDuration = 1500;

successBtnElement.addEventListener("click", (ev) => {
    const elem = ev.target;
    elem.classList.add(pendingClassName);

    window.setTimeout(() => {
        elem.classList.remove(pendingClassName);
        elem.classList.add(successClassName);
        window.setTimeout(() => elem.classList.remove(successClassName), stateDuration);
    }, stateDuration);
});

failBtnElement.addEventListener("click", (ev) => {
    const elem = ev.target;
    elem.classList.add(pendingClassName);

    window.setTimeout(() => {
        elem.classList.remove(pendingClassName);
        elem.classList.add(failClassName);

        window.setTimeout(() => elem.classList.remove(failClassName), stateDuration);
    }, stateDuration);
});