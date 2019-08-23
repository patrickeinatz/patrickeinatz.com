$('.trumbowyg').trumbowyg();

$('.custom-file-input').on('change', function(event) {
    var inputFile = event.currentTarget;
    $(inputFile).parent()
        .find('.custom-file-label')
        .html(inputFile.files[0].name);
});

function maxLength(el) {
    if (!('maxLength' in el)) {
        var max = el.attributes.maxLength.value;
        el.onkeypress = function () {
            if (this.value.length >= max) return false;
        };
    }
    console.log('maxLength INIT')
}
maxLength(document.getElementById('article_form_excerpt'));

function textCounter(field,field2,maxlimit)
{
    var countfield = document.getElementById(field2);
    if ( field.value.length > maxlimit ) {
        field.value = field.value.substring( 0, maxlimit );
        return false;
    } else {
        countfield.innerHTML = maxlimit - field.value.length;
    }
}