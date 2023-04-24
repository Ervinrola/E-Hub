const dropZone = document.querySelector(".drop-zone");

dropZone.addEventListener("dragover", (event) => {
    event.preventDefault();
    dropZone.classList.add("drop-zone--over");
});

dropZone.addEventListener("dragleave", () => {
    dropZone.classList.remove("drop-zone--over");
});

dropZone.addEventListener("drop", (event) => {
    event.preventDefault();
    const file = event.dataTransfer.files[0];
    handleFileUpload(file);
});

dropZone.addEventListener("click", () => {
    document.querySelector("#file").click();
});

document.querySelector("#file").addEventListener("change", (event) => {
    const file = event.target.files[0];
    handleFileUpload(file);
});

function handleFileUpload(file) {
    // Do something with the file, e.g. display it on the page
    const reader = new FileReader();
    reader.readAsDataURL(file);
    reader.onload = () => {
        const image = new Image();
        image.src = reader.result;
        document.body.appendChild(image);
    };
}

const accordionHeaders = document.querySelectorAll('.accordion-header');

accordionHeaders.forEach(header => {
    header.addEventListener('click', () => {
        const isActive = header.classList.contains('active');
        accordionHeaders.forEach(header => header.classList.remove('active'));
        if (!isActive) {
            header.classList.add('active');
            const accordionBody = header.nextElementSibling;
            accordionBody.style.display = 'block';
        }
    });
});

/*tags*/