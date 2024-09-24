const id = +window.location.href.split("?")[1].split('=')[1];
const products = [...featuredProducts, ...MoreProducts];
const selectedProducts = products.filter(product => product.id === id)
const selectedProduct = selectedProducts[0];
const imgContainer = document.getElementById('single-product-img-container');
imgContainer.firstElementChild.src = `assets/img/products/${selectedProduct.imgName}.jpg`
const selectedProductDescArr = selectedProduct.description.split('.')//.join(".<br>");
for(var i = 0; i< selectedProductDescArr.length-1; i++){
  selectedProductDescArr[i]  += '.';
}
for(var i = 0; i< selectedProductDescArr.length; i=i+5){
  if(i%2 ==0)
  selectedProductDescArr[i]  = "<p text-align:justify>"+ selectedProductDescArr[i];
else
selectedProductDescArr[i]  = "</p><p text-align:justify>"+ selectedProductDescArr[i];
}

const selectedProductDesc = selectedProductDescArr.join('');
document.getElementById('oil-name').innerText = selectedProduct.name;
document.getElementById('oil-description').innerHTML = selectedProductDesc +'</p>';
document.getElementById('single-product').innerText = selectedProduct.name;