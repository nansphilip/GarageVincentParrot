const foldingContainer = document.querySelector('.folding-container');
const unfoldButton = document.querySelector('.unfold-button');
const foldButton = document.querySelector('.fold-button');

const unfold = () => {
    foldingContainer.classList.remove('folded');
    foldingContainer.classList.add('unfolded');


    unfoldButton.classList.toggle = 'd-none';
    foldButton.classList.toggle = 'd-none';
}

const fold = () => {
    
    unfoldButton.classList.toggle = 'd-none';
    foldButton.classList.toggle = 'd-none';
}

