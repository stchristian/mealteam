var album1 = ["img/slider/1.jpg", "img/slider/2.jpg", "img/slider/3.jpg", "img/slider/4.jpg", "img/slider/5.jpg", "img/slider/6.jpg", "img/slider/7.jpg", "img/slider/8.jpg", "img/slider/9.jpg"];
//var album2 = [];
//var album3 = [];
var selectedAlbum = album1;
var selectedPictureIndex = 0;

/*function selectAlbum(selectedID) {
    selectedAlbumID = document.getElementById('selectedID');
    var imgViewer = document.getElementById('img-viewer');
    var newPicture = selectedAlbum[0];
    imgViewer.setAttribute("src", "newPicture");

    var imgViewerThumbnails = [];
    var imgViewerThumbnails = [];
    for(i = 0; i < 6; i++) {
        imgViewerThumbnails[i].setAttribute("src", "newPicture");
    }
}

function selectPicture() {

}*/

function nextPicture() {
    var imgViewer = document.getElementById('img-viewer');
    if (selectedPictureIndex < selectedAlbum.length - 1) {
        selectedPictureIndex++;
        var newPicture = selectedAlbum[selectedPictureIndex];
        imgViewer.setAttribute("src", newPicture);
    }
}

function previousPicture() {
    var imgViewer = document.getElementById('img-viewer');
    if (selectedPictureIndex > 0) {
        selectedPictureIndex--;
        var newPicture = selectedAlbum[selectedPictureIndex];
        imgViewer.setAttribute("src", newPicture);
    }
}
