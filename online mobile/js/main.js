function getName() {
    if (typeof (Storage) !== "undefined") {
        if (localStorage.User) {
            var temp = document.getElementById("user_name");
            temp.innerHTML = localStorage.getItem("User") + "!";
        } else {
            var name = prompt("Enter your name ;)");
            if (name) {
                localStorage.setItem("User", name);
                var temp = document.getElementById("user_name");
                temp.innerHTML = localStorage.getItem("User");
                return;
            }
        }
    }
}