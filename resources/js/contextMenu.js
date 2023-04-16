window.copyAddress =  function (elmId) {
    let copyText = document.getElementById(elmId);

    navigator.clipboard.writeText(copyText.dataset.text);
}

export default copyAddress;
