console.log("Hello world");

document.addEventListener("DOMContentLoaded", function () {
  const prioritySelect = document.getElementById("priority");
  const createTaskBtn = document.querySelector('[name="createTask"]');
  const buyRapidBtn = document.querySelector('[name="buyRapidTask"]');

  prioritySelect.addEventListener("change", function () {
    if (this.value === "rapid") {
      createTaskBtn.classList.add("hidden");
      buyRapidBtn.classList.remove("hidden");
    } else {
      createTaskBtn.classList.remove("hidden");
      buyRapidBtn.classList.add("hidden");
    }
  });
});


function triggerFileUpload() {
  console.log("triggerFileUpload");
  document.getElementById('fileUpload').click();
}

function handleFileSelect(event) {
  console.log("handleFileSelect");
  const files = event.target.files;
  const fileCountSpan = document.getElementById('fileCount');
  const clearFileSpan = document.getElementById('clearFile');

  if (!fileCountSpan || !clearFileSpan) {
      console.error("File count or clear file span not found.");
      return; // Exit the function if elements are not found
  }

  if (files.length > 0) {
      fileCountSpan.style.display = 'inline';
      fileCountSpan.textContent = `${files.length} file${files.length > 1 ? 's' : ''} selected`;
      clearFileSpan.style.display = 'inline';
  } else {
      fileCountSpan.style.display = 'none';
      clearFileSpan.style.display = 'none';
  }
}

function clearFileUpload(event) {
  console.log("clearFileUpload");
  event.stopPropagation();
  const fileInput = document.getElementById('fileUpload');
  fileInput.value = '';
  const fileCountSpan = document.getElementById('fileCount');
  const clearFileSpan = document.getElementById('clearFile');
  fileCountSpan.style.display = 'none';
  clearFileSpan.style.display = 'none';
}

function processFiles(event) {
  const files = event.target.files;
  const previewContainer = document.getElementById("filePreviewContainer");
  const uploadMessage = document.getElementById("uploadMessage");

  // Check if files array is empty
  if (files.length === 0) {
    uploadMessage.classList.remove("hide"); // Show the upload message
  } else {
    uploadMessage.classList.add("hide"); // Hide the upload message
  }

  previewContainer.innerHTML = ""; // Clear existing previews

  for (let i = 0; i < files.length; i++) {
    const file = files[i];
    const reader = new FileReader();

    reader.onload = function(event) {
      const preview = document.createElement("div");
      preview.className = "dz-preview dz-processing dz-error dz-complete dz-image-preview rounded-4 d-flex justify-content-center align-items-center";

      const imageDiv = document.createElement("div");
      imageDiv.className = "dz-image";

      if (file.type.startsWith("image/")) {
        const img = document.createElement("img");
        img.src = event.target.result;
        img.alt = file.name;
        img.style.maxWidth = "100%";
        imageDiv.appendChild(img);
      } else {
        const img = document.createElement("img");
        img.src = "assets/imgs/file-attachment.webp"; // Image URL for non-image files
        img.alt = file.name;
        img.style.maxWidth = "100%";
        imageDiv.appendChild(img);
      }

      preview.appendChild(imageDiv);

      previewContainer.appendChild(preview);
    };

    reader.readAsDataURL(file);
  }
}



