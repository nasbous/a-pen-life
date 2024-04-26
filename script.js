let paragraphDisplayed = document.getElementById('presentation');
const picturesFrames = document.getElementsByClassName('xp-illustration');

//picturesArray[0] = photo associée au paragraphe de présentation
const picturesArray = ['./images/image0.jpg', './images/image1.jpg', './images/image2.jpg', './images/image3.jpg', './images/image4.jpg', './images/image5.jpg'];

console.log(picturesFrames[1]);

function displayDescription(xpID) {

  paragraphDisplayed.setAttribute('style', 'display: none');
  const description = document.getElementById('xp-' + xpID);
  description.setAttribute('style', 'display: initial');
  paragraphDisplayed = description;

  picturesFrames[0].setAttribute('style', 'background-image: url(' + picturesArray[xpID - 1] + ')');
  picturesFrames[1].setAttribute('style', 'background-image: url(' + picturesArray[xpID] + ')');

  switch (xpID) {
    case (picturesArray.length) - 1:
      picturesFrames[2].setAttribute('style', 'background-image: url(' + picturesArray[0] + ')');
      break;
    default:
      picturesFrames[2].setAttribute('style', 'background-image: url(' + picturesArray[xpID + 1] + ')');
  }

  switch (xpID) {
    case (picturesArray.length) - 2:
      picturesFrames[3].setAttribute('style', 'background-image: url(' + picturesArray[0] + ')');
      break;
    case (picturesArray.length) - 1:
      picturesFrames[3].setAttribute('style', 'background-image: url(' + picturesArray[1] + ')');
      break;
    default:
      picturesFrames[3].setAttribute('style', 'background-image: url(' + picturesArray[xpID + 2] + ')');
  }
}

