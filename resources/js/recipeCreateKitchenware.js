function add(addElement) {
    // let displayButton = document.querySelector("form button");

    if(addElement.previousElementSibling.value.trim() === "") {
        return false;
    }

    let table = document.createElement("table");
    table.setAttribute("id", "kitchenware_dynamic_field");

    let kitchenware_dynamic_field = document.createElement("input");
    kitchenware_dynamic_field.setAttribute("type", "text");
    kitchenware_dynamic_field.setAttribute("name", "kitchenware[]");
    kitchenware_dynamic_field.setAttribute("placeholder", "Enter kitchenware to use");

    let add = document.createElement("button");
    add.setAttribute("id", "add");
    let addText = document.createTextNode("Add more");
    add.appendChild(addText);

    let remove = document.createElement("button");
    remove.setAttribute("id", "remove");
    let removeText = document.createTextNode("Remove");
    remove.appendChild(removeText);

    table.appendChild(kitchenware_dynamic_field);
    table.appendChild(add);
    table.appendChild(remove);
}