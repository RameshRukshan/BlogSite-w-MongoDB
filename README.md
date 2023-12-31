﻿# BlogSite-w-MongoDB
<h1>ABSTRACT</h1>
<p><br></p>
<p>This report presents the development of a hotel review blog site using HTML and MongoDB for backend data storage and user management. The project aims to demonstrate a secure and efficient approach to user authentication, leveraging the flexibility and scalability of MongoDB as the database solution. The React application offers a seamless user experience, handling login and registration processes while interacting with the MongoDB backend to store and retrieve data. The report outlines the project&apos;s setup, authentication flow, backend integration, database implementation, and deployment process. The implementation follows best practices, including entry validations and protection against common security vulnerabilities. The project&apos;s successful completion showcases the powerful combination of MongoDB in building a robust and user-friendly login system that can be utilized for future web applications.</p>
<h1>INTRODUCTION</h1>
<p>The purpose of this project was to create a hotel rating blog site for users to add and read reviews for hotels in Sri Lanka. The project was developed as an assignment for the Advanced Database Management System module. The site was built using HTML, CSS, and Bootstrap for the frontend, and PHP with MongoDB Cloud as the backend.&nbsp;</p>
<h1>OBJECTIVES</h1>
<p><br></p>
<p>The primary objectives of this project were to:</p>
<ul>
    <li>
        <p>Develop a user-friendly hotel rating blog site where users can read and add reviews for hotels in Sri Lanka.</p>
    </li>
    <li>
        <p>Implement a robust backend system using PHP and MongoDB Cloud to manage user data and hotel reviews.</p>
    </li>
    <li>
        <p>Design an aesthetically pleasing and responsive frontend using HTML, CSS, and Bootstrap to enhance user experience.</p>
    </li>
    <li>
        <p>Ensure proper database design and management for efficient data storage and retrieval.</p>
    </li>
</ul>
<p><br></p>
<p><br></p>
<h1>SYSTEM ARCHITECTURE</h1>
<p>The hotel rating blog site follows a client-server architecture, with the frontend and backend components working together to provide a seamless user experience. The system architecture can be abstracted as follows:</p>
<p><br></p>
<h1>FRONTEND COMPONENTS</h1>
<p><br></p>
<ul>
    <li>
        <p>HTML: Responsible for defining the structure of the web pages.</p>
    </li>
    <li>
        <p>CSS: Used for styling the HTML elements and providing a visually appealing interface.</p>
    </li>
    <li>
        <p>Bootstrap: Employed to create responsive and mobile-friendly web pages, improving cross-device compatibility.</p>
    </li>
</ul>
<p><br></p>
<h1>BACKEND COMPONENTS</h1>
<p><br></p>
<ul>
    <li>
        <p>PHP: Handles the server-side logic and connects with the MongoDB Cloud database to perform CRUD operations for user data and hotel reviews.</p>
    </li>
    <li>
        <p>MongoDB Cloud: Cloud-based NoSQL database used to store user information, hotel details, and reviews.</p>
    </li>
</ul>
<h1>FUNCTIONALITIY &amp; FEATURES</h1>
<p><br></p>
<p>The hotel rating blog site offers the following key features:</p>
<ul>
    <li>
        <p>User Registration and Login: Users can create an account or log in to the system using their credentials.</p>
    </li>
    <li>
        <p>Hotel Listing: Displaying a list of hotels in Sri Lanka along with basic information about each hotel.</p>
    </li>
    <li>
        <p>Hotel Details: Providing more detailed information about each hotel, including its location, amenities, and user reviews.</p>
    </li>
    <li>
        <p>User Reviews: Allowing registered users to add, edit, and delete reviews for hotels.</p>
    </li>
    <li>
        <p>Search and Filter: Enabling users to search for hotels and filter them based on various criteria, such as location, price, and ratings.</p>
    </li>
</ul>
<h1>DATABSE DESIGN</h1>
<p><br></p>
<p>The database design revolves around MongoDB Cloud, utilizing collections to store data in a JSON-like format. The key collections are as follows:</p>
<ul>
    <li>
        <p>Users Collection: Stores user information such as username, email, and hashed passwords.</p>
    </li>
    <li>
        <p>Hotels Collection: Contains hotel details like name, location, amenities, and average rating.</p>
    </li>
    <li>
        <p>Reviews Collection: Holds user reviews for hotels, including the review text and associated ratings.</p>
    </li>
</ul>
<h2>UI DIAGRAMS</h2>
<p><br></p>
<ol>
    <li>
        <p>Home Page &ndash; User Side</p>
    </li>
</ol>
<p><img src="https://lh5.googleusercontent.com/yaUsaxG_liQFsg0mbKCep7iZKqnxdS2KZ50CQ_OHr1eOzA0V5Ha-672tgBm3InVhPWnffFxHT2UUVuwkKbWem4F0rYKvmbG1wBpZlXLLdmciiT9tshCpVRru72LtUyypLW_py99JafJlHeApMlUd6OdYEuxJDU_d" width="409" height="727"></p>
<p><br></p>
<ol start="2">
    <li>
        <p>Blog Page &ndash; User Side</p>
    </li>
</ol>
<h2><img src="https://lh3.googleusercontent.com/EevwMY2Mki3g_vND6MVcxLkmg4nwv4fDGsskv3bJuvpR9XYv5ctPcW-OQwulfgMtnEO_KAKialCdo5CLV7jlDze7l1npuGVRp6v5dnOlbVhtZhMZv3fg3kweaOU79Z82VdGHjdy56vIpLk66UDCMhFbt8x6nuOaJ" width="447" height="762"></h2>
<p><br></p>
<ol start="3">
    <li>
        <p>About Us page &ndash; User Side</p>
    </li>
</ol>
<p><img src="https://lh6.googleusercontent.com/iDtZPJSSwXIdRDFhIujKM8O97txQgdH2W_LMsgiafxHF4AyHnY_fltNjdD1JMQ7i7hhd698p_1C6EbbOtYSQCm3H6dpbNNVxgmnYGGe2Ij0fPqA896gaXAcYrJqStjoeCk_frgX3r0tXp9BuP25bRJYVhKz665ot" width="524" height="819"></p>
<ol start="4">
    <li>
        <p>Team Page &ndash; User Side</p>
    </li>
</ol>
<p><br></p>
<p><img src="https://lh4.googleusercontent.com/7iv5pPgggR6q0cILUWfNak5trexSZQ8i5d8_JFK8wodjoJEdGXop6x-q6aeh2WxV2yvrp1vbsvYFXOa00LAYeFN-IKEnZg-kcchbgxN0Thdry-BaEtNBoNgUNF3cNPQXBX19Prru_jfMrLfmlXSj4eIiBoyTe4Z4" width="572" height="798"></p>
<p><br></p>
<ol start="5">
    <li>
        <p>Contact Us &ndash; User Side</p>
    </li>
</ol>
<p><br></p>
<p><img src="https://lh3.googleusercontent.com/ZuDk-a9kyiWXUMzYbqn7fZgfFj96W9lXrV8qrYAK-EgwWTlluebX6xlMAMqgCLZXzpeovCwv0vn7Gz-OGssST8ST1sn0OINHSMA8j1WjsDRMyKkWjpMxSx3Lby8h8AijML8sLkGJoSHUfaBuej_8m8QHYdMrAjIW" width="410" height="790"></p>
<p><br></p>
<p><br></p>
<ol start="6">
    <li>
        <p>Login page</p>
    </li>
</ol>
<p><img src="https://lh5.googleusercontent.com/ziBLhJpHlV9IaGxxC1Z39M8DRKH_abVA5Lz6t0FWKHg6KEH49oKmQTZWDhIfe7-w2hjKJ8-XTcMDqxsqJt-HDOPyeJR8st_Mj7WC4hAjzlO8yYrBDByU_hoeGDZ9ClGtIDjA0LyyV1-95Iek4bwXqtQIwNn5agUY" width="455" height="231"></p>
<p><br></p>
<ol start="7">
    <li>
        <p>Admin Dashboard</p>
    </li>
</ol>
<p><img src="https://lh5.googleusercontent.com/QYsWBLAhD082jsT0oD4xGJ6ThPB1a3SVtzbT_0D_LLocHPAcQtBVH7KPKW_hTJws0_ekbkZg4Iztl8_YEUTfzjRdwowaatIlmO37qletYd4bqld1X1XLXjQruUx4XXNX3E31DVW_kkAdEMTsjr5oYqTdrz8Xrq9s" width="504" height="504"></p>
<ol start="8">
    <li>
        <p>Add Blog page &ndash; Admin Side</p>
    </li>
</ol>
<p><br></p>
<p><img src="https://lh4.googleusercontent.com/EEhr4pJYjJxq1a3Kz3KPFH6uYlGJl95nJsAPlpib0G5-qKdOnWWuV3vIlPVgFVgJYFcUtzg3a7x1_ErtdkzSbx8474kTYRRtUrzsVFvGuhcE4-_gS6QpHur7KrcXAOaPbbtuVGtjX8uIrCwJK2ON72BC0tBuYowf" width="624" height="563"></p>
<p><br></p>
<p><br></p>
<p><br></p>
<p><br></p>
<p><br></p>
<p><br></p>
<p><br></p>
<ol start="9">
    <li>
        <p>Edit Blog page &ndash; Admin Side</p>
    </li>
</ol>
<p><img src="https://lh3.googleusercontent.com/STtEjJ86M4xOXQiQxxFLD1hbqfjmrnDQWwbOom6SlTsFLfyku3CFPIjyx6Saaom2ESJef1kelrsgmRU1HASqh0kCL45EDHix3HhUsAa_RfyvLLb-DZ8w8CBZNR9NrV2nO2UjrapnJb4fv21oazAeKPgUlCvWmzXe" width="624" height="728"></p>
<p><br></p>
<p><br></p>
<p><br></p>
<ol start="10">
    <li>
        <p>View Blog &ndash; Admin Side</p>
    </li>
</ol>
<p><img src="https://lh6.googleusercontent.com/X3hiQJHFIPA4kAFFALA-cK9My9_iNkEeXfnBeF3KSL4g0yP0p7lNzLT6Gov3yzmQy6ZWoPiAu2LgkQxm29joqIvqbu-4rpWq1znh8iU3sPV-jQnm_YkrWdRtodX0_C-gnnyrfqgq4wbW2XbjJuaqc47L91j9zJ9G" width="624" height="584"></p>
<p><br></p>
<p><br></p>
<p><br></p>
<p><br></p>
<p><br></p>
<p><br></p>
<p><br></p>
<p>SETUP GUIDELINES</p>
<p>MongoDB Atlas is a cloud-based database service provided by MongoDB. Following are the steps to setup MongoDB Atlas:</p>
<ol>
    <li>
        <p>Sign up for MongoDB Atlas:</p>
    </li>
</ol>
<p><img alt="A screenshot of a computer Description automatically generated" src="https://lh5.googleusercontent.com/fimJ0iwhCQxV_hcgJBEdRGTO__iSA2qIBGg-l2ecxmS5HpO9Au1vvulJa3TlGnMhNnvqwww6Wu_tvNjKp8Pll4AZAaw1E-p3AjQW-gCCBiFC-XI0axOeMbGUiaCa161RofadhxGrOg2smGzcp8bp-5ryo9s6VQlt" width="623" height="303"></p>
<p>Go to the MongoDB Atlas website (https://www.mongodb.com/cloud/atlas).</p>
<p>Click on &quot;Try Free&quot; or &quot;Sign up&quot;.</p>
<p>Then, follow the registration process and create a MongpDB account.</p>
<p><br></p>
<p><br></p>
<p><br></p>
<p><br></p>
<p><br></p>
<p><br></p>
<p><br></p>
<p><br></p>
<p><br></p>
<p><br></p>
<p><br></p>
<p><br></p>
<ol start="2">
    <li>
        <p>Deploy Database and create a new MongoDB Cluster:</p>
    </li>
</ol>
<p>Once user has logged in, click on &quot;Build a New Cluster&quot; section.</p>
<p><img alt="A screenshot of a computer Description automatically generated" src="https://lh5.googleusercontent.com/7EYXGOaOihry4r1uMme7OhHAZ7_5tq6_HzTvWIjU1O_UjHCzP2Tr2pSItdzzqLXrRMek8mysneNAagI2WUJDen2mC9j2j8XaadgSYnky3QOrOlYiSNv-6WGGPjIgy950NjP3P9o7UsY7twwxu6KcTv1Ur2NC7X9r" width="598" height="726"></p>
<p>Select your preferred cloud provider and region.</p>
<p>Choose the appropriate settings for your cluster, such as cluster tier, backup options, etc.</p>
<p>Click &quot;Create&quot; to create the cluster.</p>
<p><br></p>
<ol start="3">
    <li>
        <p>Create a Database User:</p>
    </li>
</ol>
<p>In the MongoDB Atlas dashboard, navigate to &quot; Database Access &quot; under &quot;Security&quot;.</p>
<p>Click on &quot;Add New Database User&quot; and create a database user to grant an application or user, access to the databases and collections within the cluster.&nbsp;</p>
<p><img alt="A screenshot of a computer Description automatically generated" src="https://lh3.googleusercontent.com/A_AYIWdmzHsjrbsatpMmIQ-31svSC4ZsxI3d4LAk9oVgb-Dbc7tYTYtn4A_qeZwChUG_uKk9rp6P-KmuugcwNPxK-bSPUfqLsZqALltHSu_T164zJbpRSs7OJq5w-JARr7EuCjf6eb1jOOKV3kA7nvZu_pCT3NL6" width="450" height="608"></p>
<p><br></p>
<ol start="4">
    <li>
        <p>Whitelist your IP address:</p>
    </li>
</ol>
<p>Next, navigate to &quot;Network Access&quot; under &quot;Security&quot;.</p>
<p>Click on &quot;Add IP Address&quot; and specify the IP address or range that you want to whitelist. This will allow your Node.js server to connect to the database.&nbsp;</p>
<p><img alt="A screen shot of a computer Description automatically generated" src="https://lh6.googleusercontent.com/esDksCebV4EBE334bYq4kQW07PivqiItH83sAUhCuUD-2u2fKtIIg0IsnA6VYStk3o9dhK1hM8HM8O5Zi7Hix5M7FGf2oCYNO70yNhcSITeJGRVybJVNGFfHw9K6gKX-3Wt_TvUg7wuc_7vau_gtS41KUkGDe5Vi" width="624" height="378"></p>
<p><br></p>
<ol start="5">
    <li>
        <p>Get connection string:</p>
    </li>
</ol>
<p>In the MongoDB Atlas dashboard, go to &quot;Clusters&quot; and click on &quot;Connect&quot;.</p>
<p>Choose &quot;Connect your application&quot;.</p>
<p>Copy the connection string provided.</p>
<p><img alt="A screenshot of a computer Description automatically generated" src="https://lh4.googleusercontent.com/sNqC0TXynn437MtAXTOOLq0365Up7jGnKS780rFmItWOsJSsKij-tj-il96jU_W8w_lpAiZWBNmrMyP4xGYLb8crnDhpX4RjaZbHjBHLgB68KQNSUDwP1W7ANzAI5JeQRLZGBvV6Zs-prcabKYuzVwTOKWfMn0vA" width="602" height="720"></p>
<p><br></p>
<p><br></p>
<p><br></p>
<p><br></p>
<p><br></p>
<ol start="6">
    <li>
        <p>Connect to MongoDB from php:</p>
    </li>
</ol>
<p>Install the MongoDB php extension. You can install the MongoDB PHP extension using Composer by running the following command in your project directory:</p>
<p><img src="https://lh4.googleusercontent.com/QLGNHYQm53_Xs4C66LVySVsCZMK-uuRgoECh9GD1CCjZgMklgShd7e6vO_qz-99OBo9dPi4VoHyJB1dt63H7wL3Uu_bHy2cSz77dnFQFklDuzbK32e2P-65Zg_Keq83k_4Ma67LDG74WRpl89nniYv0yV4THgi0m" width="349" height="34"></p>
<p><br></p>
<p><br></p>
<ol start="7">
    <li>
        <p>Import php mongo db library</p>
    </li>
</ol>
<p><img alt="A black background with green text Description automatically generated" src="https://lh4.googleusercontent.com/r7rgYkJc4l_yKU0S2t2N_AvkvM4enKSSKBGPLC7tyr8VL0Lx6txuBFbrdaqZqWqTQNbhlgR5ZXgUvj9WZ-c7Gr6rgs53thckJyZ83ElVhHhMtE26p5QZEj-yqSUsfb7D0YbX0IRFsPaV1P9uk1gbklHlSvkrFxnA" width="266" height="54"></p>
<p><br></p>
<h2>SOURCE CODES</h2>
<p><br></p>
<p><img src="https://lh5.googleusercontent.com/r6Reyo9BAxixGA90bDtnBlxLojISgXRzeKuJaxxDqVLk8VE68uYVdCnbA1XOTyI-1No5JMiPcMVmQRoZjJ_nxCsBniIGQh0hLNJJbwExmD1-mZohGv5rjeYJHpU9ux1f9-vsY_1WrTzfCzr1FaK1PUgIsObs72wN" width="624" height="461"></p>
<p>&nbsp;(Database Connection)</p>
<p><img src="https://lh3.googleusercontent.com/fxuhiOd6QEa7ybYfK49uh6YJQAzoyQkt_Ge3uNqFBIlVX8nGyBMe-RvyzdMcSw0DFTk7RkW2n1CoKw9uXnsMEhuqCd3989DgMz3NGZBwaI_dQTh2aHx8MhjTQdTsPCsP3dRuu9B0re7UsgeyVk6ETSSIYo_09ik_" width="464" height="221"></p>
<p>(Insert records)</p>
<p><img alt="A computer screen with text Description automatically generated" src="https://lh5.googleusercontent.com/aGAu9sLODQ6zkBKINRHB0t8BukB_QHv1emZL_yCjgyv4GsoNtbiQUxGnMOa7c3w8NmyxU8fnp_JOa5VcmGadvYW6EeP5DV07x6mWGVC_WTud5XwRgo1k418Q1YLaTniLbzulyf43X38WgT8_Fo_URfFlCafeYkVI" width="589" height="116"></p>
<p>(Get Records)</p>
<p><img alt="A computer screen with many colorful text Description automatically generated" src="https://lh6.googleusercontent.com/IzYj6BFpGdIJot20vYfLxllzEbiIJeOSmCotQLGp5tfOgzPiCeFYsjg7bliBk2CsYhWi0Z6CE_kdz8xj4nrYnSRlFkR_a26aj8NxYsd3c7ZSU6oA5-2mt7MzUKmAopvgbP_mYZIjZHi18jj4wtEfPO-hLewW7X4t" width="624" height="192"></p>
<p>(Update Records)</p>
<p><br></p>
<p><br></p>
<p><img src="https://lh4.googleusercontent.com/1pMBk9vJwPEFV_cWPuLpA8rPlNb1G8hsY-6hlPEFeG5CpO4jSkhlNiZU2iCIl_NkaNFBPBr6HPEqjgF7_fmDDMjKkEtMZXpd0Fr308rSrl47x30_Kw82avtHrpHVJzzCVFwyHbizuH_a0E30VaSDXwZ_XMQ33Cvg" width="624" height="119"></p>
<p>(Delete Record)</p>
<p><img alt="A computer screen shot of a program code Description automatically generated" src="https://lh6.googleusercontent.com/2eLqiKBzLiL4CnCggXO7pSz5gBmDEJlebBRI2uTr2bSmw4OB5BSJs_CzSBWhEiNAy1m4lxvTipAGz7uhS5gswiA1icUpo71KD2UnY9_pcrMsqacWsyrLbkhgLUNeRRaisSE3DsmVcRGHNOotiZs6HqAX-p91Cs6_" width="626" height="528"></p>
<p>(Login)</p>
<p><img src="https://lh4.googleusercontent.com/IUDsl3GVhOrWhhmGdGDXj1VIEzfJXm44sk8bPoFUiRMLXwk9faf0O9orejt6pvaPGqAn1n78dRbuEqm0U3McnnR7CEv3lJNx2ONQMPPITkbyD6UU6azpzgyLLW-DQvBq90-0aTdXDYbqf2VcpqM2kBBRRvO4gtQ0" width="622" height="523"></p>
<p>(Search)</p>
