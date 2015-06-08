function showAll()
{
    var checked = document.getElementsByClassName("checked");
    for (var x = 0; x <checked.length; x++)
    {
        checked[x].style.display = "list-item";
    }
    var unchecked = document.getElementsByClassName("unchecked");
    for (var x = 0; x <unchecked.length; x++)
    {
        unchecked[x].style.display = "list-item";
    }
}

function showChecked()
{
    var checked = document.getElementsByClassName("checked");
    for (var x = 0; x <checked.length; x++)
    {
        checked[x].style.display = "list-item";
    }
    var unchecked = document.getElementsByClassName("unchecked");
    for (var x = 0; x <unchecked.length; x++)
    {
        unchecked[x].style.display = "none";
    }
}

function showUnchecked()
{
    var checked = document.getElementsByClassName("checked");
    for (var x = 0; x <checked.length; x++)
    {
        checked[x].style.display = "none";
    }
    var unchecked = document.getElementsByClassName("unchecked");
    for (var x = 0; x <checked.length; x++)
    {
        unchecked[x].style.display = "list-item";
    }
}
