var album1 = ["img/slider/1.jpg", "img/slider/2.jpg", "img/slider/3.jpg", "img/slider/4.jpg", "img/slider/5.jpg", "img/slider/6.jpg", "img/slider/7.jpg", "img/slider/8.jpg", "img/slider/9.jpg"];
var selectedAlbum = album1;
var viewerElements = ['img-viewer', 'img-viewer-1', 'img-viewer-2', 'img-viewer-3'];
var selectedPictureIndex = [0, 1, 2, 3];

function nextPicture(elementId, pictureIndex) {
    var imgViewer = document.getElementById(elementId);
    if (selectedPictureIndex[pictureIndex] < (selectedAlbum.length - 1)) {
        selectedPictureIndex[pictureIndex]++;
        var newPicture = selectedAlbum[selectedPictureIndex[pictureIndex]];
        imgViewer.setAttribute("src", newPicture);
    } else if (selectedPictureIndex[0] == (selectedAlbum.length - 1)) {
        var errorBlock = document.getElementById('gallery-error');
        errorBlock.innerHTML = "Ez az utolsó kép az albumban.";
        setTimeout(function() {
            errorBlock.innerHTML = "";
        }, 2000);
    }
}

function previousPicture(elementId, pictureIndex) {
    var imgViewer = document.getElementById(elementId);
    if (selectedPictureIndex[pictureIndex] > 0) {
        selectedPictureIndex[pictureIndex]--;
        var newPicture = selectedAlbum[selectedPictureIndex[pictureIndex]];
        imgViewer.setAttribute("src", newPicture);
    } else if (selectedPictureIndex[0] == 0) {
        var errorBlock = document.getElementById('gallery-error');
        errorBlock.innerHTML = "Ez az első kép az albumban."
        setTimeout(function() {
            errorBlock.innerHTML = "";
        }, 2000);
    }
}

function nextView() {
    for (i = 0; i < viewerElements.length; i++) {
        nextPicture(viewerElements[i], selectedPictureIndex[i]);
    }
}

function previousView() {
    for (i = 0; i < viewerElements.length; i++) {
        previousPicture(viewerElements[i], selectedPictureIndex[i]);
    }
}
