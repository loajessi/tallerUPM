var getLocalizationEditor = function (culture) {
    var localization = null;
    switch (culture) {        
        case "es":
            localization =
            {
                "bold": "Negrita",
                "italic": "Cursiva",
                "underline": "Subrayado",
                "format": "Formato",
                "size": "Tamaño",
                "left": "Izquierda",
                "center": "Centro",
                "right": "Derecha",
                "outdent": "Desindentar",
                "indent": "Indentar",
                "ul": "Lista",
                "ol": "Numeración",
                "clean": "Quitar formato"
            }
            break;        
    }
    return localization;
}