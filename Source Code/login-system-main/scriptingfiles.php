  
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" 
    integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
    crossorigin="anonymous"></script>
    <script src="../js/script.js"></script>
    <script>
        const closeMessage = document.querySelector("#close");

        // close message
        closeMessage.addEventListener('click', () => {
            closeMessage.style.display = 'none';
        });  

        function reloadUserAcc(){
            $("#userAccount").load(window.location.href + " #userAccount");
        };

        function searchUserAcc(str) {
            if ( str == "") {
            reloadUserAcc();
            return;
            } else {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                 if (this.readyState == 4 && this.status == 200) { 
                     document.getElementById("userAccount").innerHTML = this.responseText;
                 }
            };
           
            xmlhttp.open("GET", "searchFunction.php?searchUserAccount=" + str, true);
            xmlhttp.send();
            }
        }

        function reloadStock(){
            $("#searchStock").load(window.location.href + " #searchStock");
        };

        function searchStock(str) {
            if ( str == "") {
            reloadStock();
            return;
            } else {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                 if (this.readyState == 4 && this.status == 200) { 
                     document.getElementById("searchStock").innerHTML = this.responseText;
                 }
            };
           
            xmlhttp.open("GET", "searchFunction.php?searchStock=" + str, true);
            xmlhttp.send();
            }
        }

        var state = "false";

        function toggle() {
            if (state) {
                document.getElementById(
                    "password").
                    setAttribute("type","password");
                state = false;
            } else {
                document.getElementById(
                    "password").
                    setAttribute("type","text");
                state = true;
            }
        }
        function togglecp() {
            if (state) {
                document.getElementById(
                    "confirmpassword").
                    setAttribute("type","password");
                state = false;
            } else {
                document.getElementById(
                    "confirmpassword").
                    setAttribute("type","text");
                state = true;
            }
        }

        function toggleup() {
            if (state) {
                document.getElementById(
                    "passwordup").
                    setAttribute("type","password");
                state = false;
            } else {
                document.getElementById(
                    "passwordup").
                    setAttribute("type","text");
                state = true;
            }
        }

        function clearBtnUserAccount() {
            $un = "";
            $pw = "";
            $ea = "";
            $ut = "Choose";
            $img = "";
        } 

        function clearBtnStock() {
            $proid = "";
            $prodname = "";
            $cat = "Select Category";
            $desc = "";
            $prc = "";
            $qty = "";
        } 

        function clearBtnOwnersProfile() {
            $op = "";
            $cn = "";
            $add = "";
            $emailadd = "";
        }

        function clearBtnPetProfile() {
            $op = "";
            $pname = "";
            $ptype = "";
            $sex = "";
            $breed = "";
            $age = "";
            $weight = "";
        }



    </script>
    