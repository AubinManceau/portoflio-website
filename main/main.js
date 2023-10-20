const navAll = document.getElementById("All");
const navWebDev = document.getElementById("WebDev");
const navDesign = document.getElementById("Design");
const navWebDesign = document.getElementById("WebDesign");
 
const AllProjects = document.getElementById("AllProjects");
const WebDevProjects = document.getElementById("WebDevProjects");
const DesignProjects = document.getElementById("DesignProjects");
const WebDesignProjects = document.getElementById("WebDesignProjects");

navAll.addEventListener('click', function(){
    navAll.classList.remove('active');
    navWebDev.classList.remove('active');
    navDesign.classList.remove('active');
    navWebDesign.classList.remove('active');
    AllProjects.classList.remove('d-n');
    WebDevProjects.classList.remove('d-n');
    WebDesignProjects.classList.remove('d-n');
    DesignProjects.classList.remove('d-n');

    WebDevProjects.classList.add('d-n');
    WebDesignProjects.classList.add('d-n');
    DesignProjects.classList.add('d-n');
    navAll.classList.add('active');
})

navWebDev.addEventListener('click', function(){
    navAll.classList.remove('active');
    navWebDev.classList.remove('active');
    navDesign.classList.remove('active');
    navWebDesign.classList.remove('active');
    AllProjects.classList.remove('d-n');
    WebDevProjects.classList.remove('d-n');
    WebDesignProjects.classList.remove('d-n');
    DesignProjects.classList.remove('d-n');

    AllProjects.classList.add('d-n');
    WebDesignProjects.classList.add('d-n');
    DesignProjects.classList.add('d-n');
    navWebDev.classList.add('active');
})

navDesign.addEventListener('click', function(){
    navAll.classList.remove('active');
    navWebDev.classList.remove('active');
    navDesign.classList.remove('active');
    navWebDesign.classList.remove('active');
    AllProjects.classList.remove('d-n');
    WebDevProjects.classList.remove('d-n');
    WebDesignProjects.classList.remove('d-n');
    DesignProjects.classList.remove('d-n');

    AllProjects.classList.add('d-n');
    WebDesignProjects.classList.add('d-n');
    WebDevProjects.classList.add('d-n');
    navDesign.classList.add('active');
})

navWebDesign.addEventListener('click', function(){
    navAll.classList.remove('active');
    navWebDev.classList.remove('active');
    navDesign.classList.remove('active');
    navWebDesign.classList.remove('active');
    AllProjects.classList.remove('d-n');
    WebDevProjects.classList.remove('d-n');
    WebDesignProjects.classList.remove('d-n');
    DesignProjects.classList.remove('d-n');

    AllProjects.classList.add('d-n');
    WebDevProjects.classList.add('d-n');
    DesignProjects.classList.add('d-n'); 
    navWebDesign.classList.add('active');
})


