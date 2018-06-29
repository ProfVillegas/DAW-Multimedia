var txtFile = "test.txt";
var file = new File([],txtFile, {type: "text/plain", lastModified: new Date().getTime()});



console.log('size=' + file.size);
console.log('type=' + file.type);
console.log('name=' + file.name);

