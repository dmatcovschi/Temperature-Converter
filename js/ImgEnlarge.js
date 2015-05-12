   //Used to enlarge images
   $('#recruiters').click(function showImage(imgName) {
                document.getElementById('largeImg').src = imgName;
                showLargeImagePanel();
                unselectAll();
            })
            $('#recruiters').click(function showLargeImagePanel() {
                document.getElementById('largeImgPanel').style.visibility = 'visible';
            })
            $('#recruiters').click(function unselectAll() {
                if(document.selection) document.selection.empty();
                if(window.getSelection) window.getSelection().removeAllRanges();
            })
            $('#recruiters').click(function hideMe(obj) {
                obj.style.visibility = 'hidden';
            })
