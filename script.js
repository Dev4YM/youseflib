function editName() {
			document.querySelector("#name").readOnly = false;
			document.querySelector(".container").classList.add("edit-mode");
            const nameInput = document.querySelector("#name");
            nameInput.readOnly = false;
            nameInput.focus();
            document.querySelector("#edit-btn").style.display = "none";
		}
		function updateName() {
			document.querySelector("#name").readOnly = true;
			document.querySelector(".container").classList.remove("edit-mode");
            document.querySelector("#edit-btn").style.display = "block";
        }
		function cancelEdit() {
            const nameInput = document.querySelector("#name");
            nameInput.value = "";
            nameInput.readOnly = true;
            document.querySelector(".container").classList.remove("edit-mode");
            document.querySelector("#edit-btn").style.display = "block";
        }
