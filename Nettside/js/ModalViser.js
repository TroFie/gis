function showModal(imageUrl) {
	//Viser modalen på siden.
	var modal = document.getElementById("image-modal1");
	modal.style.display = "block";
	var modalContent = document.getElementById("modal-content1");
	modalContent.src = imageUrl;
}

function closeModal() {
	// Lukker modalen på siden. 
	var modal = document.getElementById("image-modal1");
	modal.style.display="none";
}