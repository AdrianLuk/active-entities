import { projects } from "./projects.js";
import { blogs } from "./blog.js";
const assetDirectory = "../assets/images/";
// console.log(projects);
$(document).ready(function() {
    // loop through projects pulled in from projects.js and output html
    projects.map(project => {
        $("#projects-grid").append(`<a href="${
            project.url ? project.url : `javacript:;`
        }" class="item__link">
                <div class="item__container">
                    <img src="${assetDirectory}${project.imageName}" alt="${
            project.name
        } image" class="item__image">
                    <div class="item__content">
                        <h2 class="item__title">${project.name}</h2>
                        <p class="item__learn-more">
                            <span class="item__learn-more-text">Learn More</span>
                            <span class="item__learn-more-icon fa fa-arrow-right"></span>
                        </p>
                    </div>
                </div>
            </a>`);
    });
    if ($("#blog-grid")) {
        blogs.map(blog => {
            $("#blog-grid").append(`<a href="..${
                blog.url ? blog.url : `javacript:;`
            }" class="item__link">
                <div class="item__container">
                    <img src="${assetDirectory}${blog.imageName}" alt="${
                blog.name
            } image" class="item__image">
                    <div class="item__content">
                        <h2 class="item__title">${blog.name}</h2>
                        <p class="item__learn-more">
                            <span class="item__learn-more-text">Learn More</span>
                            <span class="item__learn-more-icon fa fa-arrow-right"></span>
                        </p>
                    </div>
                </div>
            </a>`);
        });
    }
    //choose 4 random past projects to display on past projects section
    const randomProjects = [];
    for (let i = 0; i < 4; i++) {
        const rand = Math.floor(Math.random() * projects.length);
        randomProjects.push(projects.splice(rand, 1));
    }
    randomProjects.map(project => {
        $("#more-projects").append(`<a href="${
            project[0].url !== "" ? project[0].url : `javacript:;`
        }" class="item__link">
                <div class="item__container">
                    <img src="${assetDirectory}${project[0].imageName}" alt="${
            project[0].name
        } image" class="item__image">
                    <div class="item__content">
                        <h2 class="item__title">${project[0].name}</h2>
                        <p class="item__learn-more">
                            <span class="item__learn-more-text">Learn More</span>
                            <span class="item__learn-more-icon fa fa-arrow-right"></span>
                        </p>
                    </div>
                </div>
            </a>`);
    });
    //choose 4 random past blogs to display on other blogs section
    const randomBlogs = [];
    for (let i = 0; i < 4; i++) {
        const rand = Math.floor(Math.random() * blogs.length);
        randomBlogs.push(blogs.splice(rand, 1));
    }
    if ($("#more-blogs")) {
        randomBlogs.map(blog => {
            if (blog[0]) {
                $("#more-blogs").append(`<a href="..${
                    blog[0].url !== "" ? blog[0].url : `javacript:;`
                }" class="item__link">
                <div class="item__container">
                    <img src="${assetDirectory}${blog[0].imageName}" alt="${
                    blog[0].name
                } image" class="item__image">
                    <div class="item__content">
                        <h2 class="item__title">${blog[0].name}</h2>
                        <p class="item__learn-more">
                            <span class="item__learn-more-text">Learn More</span>
                            <span class="item__learn-more-icon fa fa-arrow-right"></span>
                        </p>
                    </div>
                </div>
            </a>`);
            }
        });
    }
    const copyright = new Date().getFullYear();
    $("#footer__copyright__year").text(copyright);
    $(window).scroll(function() {
        if ($(this).scrollTop() > 100) {
            $("#scroll").fadeIn();
        } else {
            $("#scroll").fadeOut();
        }
    });

    $("#scroll").click(function(e) {
        e.preventDefault();
        $("html, body").animate(
            {
                scrollTop: 0
            },
            600
        );
        // return false;
    });
    $("#learn-button").click(function() {
        $("html,body").animate(
            {
                scrollTop: $(".what").offset().top
            },
            "slow"
        );
    });
    $("#browse").click(function() {
        $("html,body").animate(
            {
                scrollTop: $("#service").offset().top
            },
            "slow"
        );
    });
    $("#down_contact").click(function() {
        $("html,body").animate(
            {
                scrollTop: $(".enquiryform").offset().top
            },
            "slow"
        );
    });
});
