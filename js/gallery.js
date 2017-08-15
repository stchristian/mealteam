var album1 = [];
var album2 = [];
var album3 = [];
var selectedAlbum;

function selectAlbum(selectedID) {
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

function nextPicture() {
    var imgViewer = document.getElementById('img-viewer');
    imgViewer.setAttribute("src", "newPicture");

    var imgViewerThumbnails = [];
    for(i = 0; i < 6; i++) {
        imgViewerThumbnails[i].setAttribute("src", "newPicture");
    }
}

function previousPicture() {
    var imgViewer = document.getElementById('img-viewer');
    imgViewer.setAttribute("src", "newpicture");

    var imgViewerThumbnails = [];
    for(i = 0; i < 6; i++) {
        imgViewerThumbnails[i].setAttribute("src", "newPicture");
    }
}
