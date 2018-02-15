function showModal(imageUrl) {
	//Viser modalen på siden.
	var modal = document.getElementById("image-modal");
	modal.style.display = "block";
	var modalContent = document.getElementById("modal-content");
	modalContent.src = imageUrl;
}

function closeModal() {
	// Lukker modalen på siden. 
	var modal = document.getElementById("image-modal");
	modal.style.display="none";
}