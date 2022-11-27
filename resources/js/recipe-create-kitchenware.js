var countre=1;

function add_more_kitchenware_fields() {
    countre+=1
    html='<div class="col-md-12" id="row'+countre+'">\
        <label class="labels for="kitchenware">Kitchenware</label>\
        <input type="text" class="form-control" name="kitchenware'+countre+'" id="inputFormKitchenware" value="{{ old("kitchenware'+countre+'") }}">\
        @error("kitchenware'+countre+'")\
            <p class="text-danger text-xs mt-1"></p>\
        @enderror\
    </div>'
    var form= document.getElementById('recipe-create-kitchenware')
    form.innerHTML+=html
}