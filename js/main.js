let startTime = Date.now();

window.onload = function() {
    startTime = Date.now();
};

window.onbeforeunload = function() {
    const endTime = Date.now();
    const timeSpent = endTime - startTime;
    alert(`You've spent ${timeSpent / 1000} seconds on this website.`);
};