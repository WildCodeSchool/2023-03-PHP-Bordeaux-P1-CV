* {
    box-sizing: border-box;
}

.gridContainer {
    display: grid;
    grid:
        "header header nav"    20vh
        "img    main   nav"    auto
        "img    main   nav"    auto
        "img    footer footer" 5vh
        / 1fr 1fr 1fr;
    height: 100vh;
    margin: auto 0;;
}

header {
    grid-area: header;
    background-color: red;
}

nav {
    grid-area: nav;
    background-color: blue;
}

img {
    grid-area: img;
    transform: scaleX(-1);
    height: 100%;
    margin: auto 0;
}

main {
    grid-area: main;
    background-color: green;
}

footer {
    grid-area: footer;
    background-color: orange;
}