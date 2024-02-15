// FUNCTIONS
const seeMoreText = (containerEl, openBtnEl, closeBtnEl, collapsedHeight = 180) => {
    const foldingContainer = document.querySelector(containerEl);
    const unfoldButton = document.querySelector(openBtnEl);
    const foldButton = document.querySelector(closeBtnEl);
    
    const getSize = () => {
        foldingContainer.style.height = 'auto';
        setSize(foldingContainer.scrollHeight);
    }
    
    const setSize = (size) => {
        isFolded = foldingContainer.classList.contains('folded');
        if (isFolded) foldingContainer.style.height = collapsedHeight + 'px';
        else foldingContainer.style.height = size + 'px';
    }
    
    const unfold = () => {
        console.log('Unfolding');
        foldingContainer.classList.toggle('folded');
    
        unfoldButton.classList.toggle('d-none');
        foldButton.classList.toggle('d-none');
    
        getSize();
    }
    
    const fold = () => {
        console.log('Folding');
        foldingContainer.classList.toggle('folded');
    
        unfoldButton.classList.toggle('d-none');
        foldButton.classList.toggle('d-none');
    
        getSize();
    }
    
    window.addEventListener('load', getSize);
    window.addEventListener('resize', getSize);

    unfoldButton.addEventListener('click', unfold);
    foldButton.addEventListener('click', fold);
};
