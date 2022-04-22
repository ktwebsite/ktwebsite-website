

const selection_block = document.getElementById("Selection-block");
const black_screen_alpha = document.getElementById("black-screen-alpha");
const selection_box_responsive = document.getElementById("selection-box-responsive");

selection_block.onclick = () => {
    if(black_screen_alpha.style.display == "none" && selection_box_responsive.style.display == "none"){
        black_screen_alpha.style.display = "block";
        selection_box_responsive.style.display = "block";
    } else {
        black_screen_alpha.style.display = "none";
        selection_box_responsive.style.display = "none";
    }
}

const close_button = document.getElementById("close-btn");

close_button.onclick = () => {
    selection_box_responsive.classList.add("Selection-box-responsive-out");
    setTimeout(() => {
        selection_box_responsive.classList.remove("Selection-box-responsive-out");
        selection_box_responsive.style.display = "none";
    }, 500);
    black_screen_alpha.classList.add("black-screen-alpha-opac-out");
    setTimeout(() => {
        black_screen_alpha.classList.remove("black-screen-alpha-opac-out");
        black_screen_alpha.style.display = "none";
    }, 500);
}