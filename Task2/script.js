// normal function
function purchase(item){
    console.log("you purchased the item"+item)
}

let item="pen"
purchase(item)
// arrow function
// either const or let should be there 
const addItem=(item)=>{
    document.write("successfully "+item+" added to cart")
}
addItem("book")
// anonymous function
let sellItem=function (item) {
    console.log("successfully sold"+item)
}
sellItem("shirt");
// immediate invoke function
(function hello() {
    console.log("hello");
})();


