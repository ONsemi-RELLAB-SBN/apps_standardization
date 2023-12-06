<?php
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>HTML5 Template</title>
        <style>
            body {
                margin: 0;
                padding: 0;
                height: 90vh;
            }

            #main-page {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 30%;
                background-color: #f2f2f2;
                padding: 20px;
            }

            #content-page {
                position: relative;
                top: 30%;
                left: 0;
                width: 100%;
                height: 70%;
                background-color: #fff;
                padding: 20px;
            }

            #tabs {
                display: flex;
                list-style: none;
                margin: 0;
                padding: 0;
            }

            #tabs li {
                margin-right: 10px;
                padding: 10px;
                border: 1px solid #ccc;
                cursor: pointer;
            }

            #tabs li.active {
                background-color: #eee;
            }

            .tab-content {
                display: none;
                padding: 20px;
            }

            .tab-content.active {
                display: block;
            }
        </style>
    </head>
    <body>
        <div id="main-page">
            <h2>General Data</h2>
            <p>This is the general data section. It will remain fixed when the page is scrolled.</p>
        </div>

        <div id="content-page">
            <ul id="tabs">
                <li class="active" data-tab="tab1">Tab 1</li>
                <li data-tab="tab2">Tab 2</li>
                <li data-tab="tab3">Tab 3</li>
            </ul>

            <div class="tab-content active" id="tab1">
                <h3>Tab 1 Content</h3>
                <p>This is the content for Tab 1.</p>
            </div>

            <div class="tab-content" id="tab2">
                <h3>Tab 2 Content</h3>
                <p>This is the content for Tab 2.</p>
            </div>

            <div class="tab-content" id="tab3">
                <h3>Tab 3 Content</h3>
                <p>This is the content for Tab 3.</p>
            </div>
        </div>

        <script>
            const tabs = document.getElementById('tabs');
            const tabContents = document.querySelectorAll('.tab-content');

            tabs.addEventListener('click', (event) => {
                const target = event.target;
                if (target.tagName !== 'LI') {
                    return;
                }

                const activeTab = document.querySelector('.active');
                activeTab.classList.remove('active');

                const newActiveTab = target;
                newActiveTab.classList.add('active');

                const activeTabContent = document.querySelector('.active.tab-content');
                activeTabContent.classList.remove('active');

                const newActiveTabContentId = newActiveTab.getAttribute('data-tab');
                const newActiveTabContent = document.getElementById(newActiveTabContentId);
                newActiveTabContent.classList.add('active');
            });
        </script>
    </body>
</html>