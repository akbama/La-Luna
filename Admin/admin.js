const btnservice = document.querySelector("#serve");
const btngroom = document.querySelector("#groom");
const btnadmin = document.querySelector("#admin");
const content = document.querySelector("#content");

btnservice.addEventListener('click', () => {
    content.innerHTML = "<form><label for='s_name'>Service Name</label><input type='text' id = 's_name' name = 's_name'><br><label for='price'>Price</label><input type='text' id = 'price' name = 'price'><br><p>Commision</p> <input type='radio' id='yes' name='commision_bool' value='yes'><label for='yes'>Yes</label><input type='radio' id='no' name='commision_bool' value='no'><label for='no'>No</label><br><input type='submit' value='Save'></form>";
});

btngroom.addEventListener('click', () => {
    content.innerHTML = "<form><label for='groomer'>Name</label><input type='text' id = 'groomer' name = 'groomer'><br><label for='commision'>Commision</label><input type='text' id = 'commision' name = 'commision'><br><input type='submit' value='Save'></form>";
});

btnadmin.addEventListener('click', () => {
    content.innerHTML = "<form><label for='u_name'>Username</label><input type='text' id = 'u_name' name = 'u_name'><br><label for='password'>Password</label><input type='text' id = 'password' name = 'password'><br><input type='submit' value='Save'></form>";
});

function def(){
    content.innerHTML = "<form><label for='s_name'>Service Name</label><input type='text' id = 's_name' name = 's_name'><br><label for='price'>Price</label><input type='text' id = 'price' name = 'price'><br><p>Commision</p> <input type='radio' id='yes' name='commision_bool' value='yes'><label for='yes'>Yes</label><input type='radio' id='no' name='commision_bool' value='no'><label for='no'>No</label><br><input type='submit' value='Save'></form>";
}