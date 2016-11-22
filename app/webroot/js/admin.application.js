// Javascript Document.



/*
{
  "menuStruct": [
    {
      "title": "Inicio",
      "subMenu": [
        {
          "nameDisplay": "Inicio",
          "url": "/"
        },
        {
          "nameDisplay": "Listar Texto",
          "url": "/indexTexts"
        },
        {
          "nameDisplay": "Editar Texto",
          "url": "/indexTexts/edit"
        },
        {
          "nameDisplay": "Listar Fotos",
          "url": "/indexPhotos"
        },
        {
          "nameDisplay": "Agregar Fotos",
          "url": "/indexPhotos/add"
        },
        {
          "nameDisplay": "Listar Noticias",
          "url": "/indexNotices"
        },
        {
          "nameDisplay": "Agregar Noticias",
          "url": "/indexNotices/add"
        }
      ]
    },
    {
      "title": "Cursos",
      "subMenu": [
        {
          "nameDisplay": "Listar",
          "url": "/courses"
        },
        {
          "nameDisplay": "Profesores",
          "url": "/course_teachers/"
        }
      ]
    },
    {
      "title": "Foro",
      "subMenu": [
        {
          "nameDisplay": "Listar",
          "url": "/guestbooks"
        }
      ]
    },
    {
      "title": "Shows",
      "subMenu": [
        {
          "nameDisplay": "Listar",
          "url": "/shows"
        },
        {
          "nameDisplay": "Agregar",
          "url": "/shows/add"
        }
      ]
    },
    {
      "title": "Clinicas",
      "subMenu": [
        {
          "nameDisplay": "Listar",
          "url": "/clinics"
        },
        {
          "nameDisplay": "Agregar",
          "url": "/clinics/add"
        }
      ]
    },
    {
      "title": "Discos",
      "subMenu": [
        {
          "nameDisplay": "Listar",
          "url": "/discs/"
        },
        {
          "nameDisplay": "Editar",
          "url": "/discs/edit"
        },
        {
          "nameDisplay": "Listar Combos - Arte",
          "url": "/discArtsCombos"
        },
        {
          "nameDisplay": "Agregar Combo - Arte",
          "url": "/discArtsCombos/add"
        },
        {
          "nameDisplay": "Listar Fotos - Arte",
          "url": "/discArtsPhotos"
        },
        {
          "nameDisplay": "Agregar Foto - Arte",
          "url": "/discArtsPhotos/add"
        },
        {
          "nameDisplay": "Listar Combos - Fotografia",
          "url": "/discPhotoCombos"
        },
        {
          "nameDisplay": "Agregar Combo - Fotografia",
          "url": "/discPhotoCombos/add"
        },
        {
          "nameDisplay": "Listar Fotos - Fotografia",
          "url": "/discPhotoPhotos"
        },
        {
          "nameDisplay": "Agregar Foto - Fotografia",
          "url": "/discPhotoPhotos/add"
        },
        {
          "nameDisplay": "Listar Combos - Impresión",
          "url": "/discPrintingCombos"
        },
        {
          "nameDisplay": "Agregar Combo - Impresión",
          "url": "/discPrintingCombos/add"
        },
        {
          "nameDisplay": "Listar Fotos - Impresión",
          "url": "/discPrintingPhotos"
        },
        {
          "nameDisplay": "Agregar Foto - Impresión",
          "url": "/discPrintingPhotos/add"
        }
      ]
    },
    {
      "title": "Estudio",
      "subMenu": [
        {
          "nameDisplay": "Listar",
          "url": "/studios"
        },
        {
          "nameDisplay": "Editar",
          "url": "/studios/edit"
        }
      ]
    },
    {
      "title": "VideoClip",
      "subMenu": [
        
        {
          "nameDisplay": "Listar",
          "url": "/videoclips"
        },
        {
          "nameDisplay": "Editar",
          "url": "/videoclips/edit"
        },
        {
          "nameDisplay": "Listar Combos",
          "url": "/videoclipCombos"
        },
        {
          "nameDisplay": "Agregar Combos",
          "url": "/videoclipCombos/add"
        }
      ]
    },
    {
      "title": "Contrataciones",
      "subMenu": [
        {
          "nameDisplay": "Listar",
          "url": "/hirings"
        },
        {
          "nameDisplay": "Editar",
          "url": "/hirings/edit"
        }
      ]
    },
    {
      "title": "Grupos",
      "subMenu": [
        {
          "nameDisplay": "Listar Géneros",
          "url": "/genres"
        },
        {
          "nameDisplay": "Agregar Género",
          "url": "/genres/add"
        },
        {
          "nameDisplay": "Listar Grupos",
          "url": "/bands"
        },
        {
          "nameDisplay": "Agregar Grupo",
          "url": "/bands/add"
        }
      ]
    },
    {
      "title": "Usuarios",
      "subMenu": [
        {
          "nameDisplay": "Listar",
          "url": "/users"
        },
        {
          "nameDisplay": "Nuevo",
          "url": "/users/add"
        }
      ]
    }
  ]
}
*/


var menu = (function(){

	var _objConf;
  var  adminPrefix = "/index.php/admin";

	function _getAllMenues(){

		var menu_collection = new Array();

		for(var counter in _objConf.menuStruct){
			menu_collection[counter] = new Array();
			menu_collection[counter]['title'] = _objConf.menuStruct[counter].title;
			menu_collection[counter]['url'] = adminPrefix + _objConf.menuStruct[counter].url;
		}

		return(menu_collection);
	};

	function _getAllSubMenuesByParentId(parent_id){

		var submenu_collection = new Array();
		var parent_id = parent_id.split('_')[1];
		for(var counter in _objConf.menuStruct[parent_id].subMenu){
			submenu_collection[counter] = new Array();
			submenu_collection[counter]['title'] = _objConf.menuStruct[parent_id].subMenu[counter].nameDisplay;
			submenu_collection[counter]['url'] = adminPrefix + _objConf.menuStruct[parent_id].subMenu[counter].url;
		}

		return(submenu_collection);

	}

	return{

		init: function(conf){

			_objConf = typeof(conf) == 'string' ? eval( '(' + conf + ')' ) : conf;

		},

		buildMenu: function(element_id){
			var objContainer = document.getElementById(element_id);
			var array_menu = _getAllMenues();
			var element_ul = document.createElement('ul');
			element_ul.id = 'menulst';

			for(var counter in array_menu){
				var element_li = document.createElement('li');
				
				element_li.id =  'menu_' + counter;
				//element_li.class = 'menustr_' + counter;

				element_link = document.createElement('a');

				element_link.id = 'menulink_' + counter;
				element_link.className = 'menulinkstr';
				//element_link.href = array_menu[counter].url;
			  element_link.href = '#' + array_menu[counter].title ;

        $(element_link).text(array_menu[counter].title);

				element_li.appendChild(element_link);
				element_ul.appendChild(element_li);
			}

			objContainer.appendChild(element_ul);
		},

		buildSubMenu: function(element_id, parent_id){

			var objContainer = document.getElementById(element_id);

			var array_submenu = _getAllSubMenuesByParentId(parent_id);

			var element_ul = document.createElement('ul');
			
			while(objContainer.firstChild){
			    objContainer.removeChild(objContainer.firstChild);
			}

			element_ul.id = 'submenulst';

			for(var counter in array_submenu){
				var element_li = document.createElement('li');

				element_li.id = 'submenu_' + counter;


				element_link = document.createElement('a');

				element_link.href = array_submenu[counter].url == '' ? '#' : array_submenu[counter].url;
        $(element_link).text(array_submenu[counter].title);

				element_li.appendChild(element_link);
				element_ul.appendChild(element_li);
			}
			objContainer.appendChild(element_ul);
		}

	};
})();

$(document).ready(function(){

	//var jsonConf = eval( '(' + '{"menuStruct": [{"title": "menu1","subMenu": [{"nameDisplay": "sub1"},{"nameDisplay": "sub2"}]}]}' + ')');
	var jsonConf = '{"menuStruct":[{"title":"Inicio","subMenu":[{"nameDisplay":"Inicio","url":"/"},{"nameDisplay":"Listar Texto","url":"/indexTexts"},{"nameDisplay":"Editar Texto","url":"/indexTexts/edit"},{"nameDisplay":"Listar Fotos","url":"/indexPhotos"},{"nameDisplay":"Agregar Fotos","url":"/indexPhotos/add"},{"nameDisplay":"Listar Noticias","url":"/indexNotices"},{"nameDisplay":"Agregar Noticias","url":"/indexNotices/add"}]},{"title":"Cursos","subMenu":[{"nameDisplay":"Listar","url":"/courses"},{"nameDisplay":"Profesores","url":"/course_teachers/"}]},{"title":"Foro","subMenu":[{"nameDisplay":"Listar","url":"/guestbooks"}]},{"title":"Shows","subMenu":[{"nameDisplay":"Listar","url":"/shows"},{"nameDisplay":"Agregar","url":"/shows/add"}]},{"title":"Clinicas","subMenu":[{"nameDisplay":"Listar","url":"/clinics"},{"nameDisplay":"Agregar","url":"/clinics/add"}]},{"title":"Discos","subMenu":[{"nameDisplay":"Listar","url":"/discs/"},{"nameDisplay":"Editar","url":"/discs/edit"},{"nameDisplay":"Listar Combos - Arte","url":"/discArtsCombos"},{"nameDisplay":"Agregar Combo - Arte","url":"/discArtsCombos/add"},{"nameDisplay":"Listar Fotos - Arte","url":"/discArtsPhotos"},{"nameDisplay":"Agregar Foto - Arte","url":"/discArtsPhotos/add"},{"nameDisplay":"Listar Combos - Fotografia","url":"/discPhotoCombos"},{"nameDisplay":"Agregar Combo - Fotografia","url":"/discPhotoCombos/add"},{"nameDisplay":"Listar Fotos - Fotografia","url":"/discPhotoPhotos"},{"nameDisplay":"Agregar Foto - Fotografia","url":"/discPhotoPhotos/add"},{"nameDisplay":"Listar Combos - Impresión","url":"/discPrintingCombos"},{"nameDisplay":"Agregar Combo - Impresión","url":"/discPrintingCombos/add"},{"nameDisplay":"Listar Fotos - Impresión","url":"/discPrintingPhotos"},{"nameDisplay":"Agregar Foto - Impresión","url":"/discPrintingPhotos/add"}]},{"title":"Estudio","subMenu":[{"nameDisplay":"Listar","url":"/studios"},{"nameDisplay":"Editar","url":"/studios/edit"}]},{"title":"VideoClip","subMenu":[{"nameDisplay":"Listar","url":"/videoclips"},{"nameDisplay":"Editar","url":"/videoclips/edit"},{"nameDisplay":"Listar Combos","url":"/videoclipCombos"},{"nameDisplay":"Agregar Combos","url":"/videoclipCombos/add"}]},{"title":"Contrataciones","subMenu":[{"nameDisplay":"Listar","url":"/hirings"},{"nameDisplay":"Editar","url":"/hirings/edit"}]},{"title":"Grupos","subMenu":[{"nameDisplay":"Listar Géneros","url":"/genres"},{"nameDisplay":"Agregar Género","url":"/genres/add"},{"nameDisplay":"Listar Grupos","url":"/bands"},{"nameDisplay":"Agregar Grupo","url":"/bands/add"}]},{"title":"Usuarios","subMenu":[{"nameDisplay":"Listar","url":"/users"},{"nameDisplay":"Nuevo","url":"/users/add"}]}]}';

	menu.init(jsonConf);
	menu.buildMenu('menu');

	$(".menulinkstr").click(function(){
		
		menu.buildSubMenu('submenu', this.id);

	})
});