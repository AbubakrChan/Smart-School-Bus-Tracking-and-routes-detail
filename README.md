# Smart-School-Bus-Tracking-and-routes-detail
The "Smart School Bus Tracking and routes detail." project aims to improve the efficiency and convenience of university bus transportation for students and staff by utilizing geolocation technology.

**Introduction:**
The "Smart School Bus Tracking and routes detail" project aims to improve the efficiency and convenience of university bus transportation for students and staff by utilizing geolocation technology. The project utilizes GPS technology to provide real-time tracking of university buses and their routes, allowing users to easily view the location and estimated arrival time of their bus. Additionally, the project provides detailed information on all bus routes and the drivers assigned to each route, allowing users to make more informed decisions about their transportation options.

**Problem Statement:**
The problem that the "Smart School Bus Tracking and routes detail" project aims to address is the lack of visibility and accessibility of information regarding university bus transportation for students and staff. Specifically, new students often struggle to learn the bus routes from their homes to the university and the driver details, and are unable to track the location of their bus, leading to missed buses and difficulty with transportation planning. Additionally, current students and staff may not have access to real-time information about bus location and estimated arrival times, making it difficult to plan their commutes. This project is aimed to provide a solution by creating a real-time bus tracking system, which will allow students and staff to view the location and estimated arrival time of their bus, as well as detailed information on all bus routes and the drivers assigned to each route. This will help the students and staff to plan their commutes, and increase their transportation efficiency.

**Objectives:**

•	To design a software to manage all the routes details and live bus tracking.
•	System lists all of the routes of UET. 
•	There are two sections of this project:
	Panels for Admin
	Panel for Student 
	Live bus location using google map API.


**Benefits:**

Improved efficiency: The tracking system may help to streamline bus operations by providing real-time location data and enabling more efficient route planning. This could lead to cost savings and improved service for passengers.

Increased safety: The tracking system may help to improve safety for both drivers and passengers by providing real-time data on the location and status of buses.
Enhanced customer service: The tracking system may provide passengers with real-time information on bus locations and arrival times, improving the overall customer experience.

Increased transparency: The tracking system may provide greater transparency in bus operations, enabling stakeholders to better understand the performance and efficiency of the bus system.

Environmental benefits: The tracking system may help to reduce fuel consumption and emissions by enabling more efficient routing and helping to reduce traffic congestion.

Improved data collection: The tracking system may provide a wealth of data that can be used to improve the efficiency and effectiveness of the bus system.


**Methodology:**

We are using AGILE METHODOLOGY. Agile project management is an iterative approach to delivering a project throughout its life cycle.
Iterative or agile life cycles are composed of several iterations or incremental steps towards the completion of a project. Iterative approaches are frequently used in software development projects to promote velocity and adaptability since the benefit of iteration is that you can adjust as you go along rather than following a linear path.


 

The methodology of the project "Uet bus live tracking and routes details with driver information using Larval and geolocation API on XAMPP with frontend containing admin and using dashboards" would likely involve the following steps:

**Requirements gathering: **
Identify the requirements for the project by interacting with the stakeholders, such as bus operators, drivers, and users.
**System design: **
Design the architecture of the system, including the frontend, backend, database, and geolocation API.
Database design: Design the database schema, including the tables and relationships needed to store the bus location, routes, and driver information.
**Development:**
Develop the frontend using JavaScript framework such as jQuery UI (JUI) and the backend using the Larval PHP framework. The XAMPP stack will be used as the local development environment.
**Integration:**
Integrate the frontend and backend to communicate and fetch data from the database and geolocation API.
**Testing:**
Test the system to ensure that it meets the requirements and is free of bugs.
**Deployment: **
Deploy the system on a Apache server, and make it accessible to the users.
**Maintenance:** 
Monitor the system and provide maintenance and support as needed.
**Improvement:** Continuously gather feedback and improve the system accordingly.

**Architecture:**
The architecture of the project would likely involve the following components:

**Frontend: **
A web interface built using HTML, CSS,JS and blade engine of in Laravel to display the bus location, routes, and driver information to the users. The frontend will also have an admin section, where the administrator can manage the bus routes, driver information, and live tracking details.
**Backend: **
A server-side application built using the Larval PHP framework to handle the data communication between the frontend and the geolocation API. The Larval application will run on the Apache web server, which is included in the XAMPP stack.
**Database: **
A database (e.g. MySQL) to store bus location, routes, and driver information. The database will be running on the MySQL server, which is also included in the XAMPP stack.
**Geolocation API:** An API used to retrieve real-time location data of the buses. This data is then used to update the bus locations on the map displayed on the frontend.
**Dashboards:**
The frontend will have interactive dashboards that display the bus location, routes, and driver information in a graphical format. The administrator can use the dashboards to manage and monitor the live tracking details.
**Integration: **
The frontend and backend are integrated to communicate and fetch data from the database and geolocation API using the PHP and JavaScript. The XAMPP stack provides a local development environment for the application.



**Geolocation API:**
A geolocation API is a programming interface that allows developers to access and use geolocation data in their applications. Geolocation technology allows for the identification of the physical location of a device, such as a smartphone or computer, using a variety of methods, including GPS, Wi-Fi triangulation, and cell tower identification.
Geolocation APIs are typically used to provide location-based services, such as maps, weather forecasts, and local search results, within mobile apps and web applications. They can also be used for location-based advertising, location-based tracking and monitoring, and location-based analytics.
The geolocation API calls a device's GPS or network location to provide the latitude and longitude coordinates of the device. This data can then be used to provide information such as the address, city, and country of the device. A geolocation API can be integrated into a variety of applications such as social media, weather apps, and navigation apps.
The geolocation API can also be used to find the nearest store, ATM, or location of interest. The API can also be used to track the location of vehicles, assets, and people. It can be integrated with other technologies like augmented reality, to provide a more comprehensive solution.

**Google map API:**
The Google Maps API is one of those clever bits of Google technology that helps you take the power of Google Maps and put it directly on your own site. It lets you add relevant content that is useful to your visitors and customize the look and feel of the map to fit with the style of your site.

**A preliminary Requirement analysis:**
1. Web Interface
a) Administrator Side
b) User side
i. Allow admin to modify, delete, or add the cartographic information for each route and their map.
ii. Map showing live location of the bus
iii. Display necessary metadata information for each route

**Technical Requirements – Feasibility:**
1. Server – The system is going to be running on a localhost on our machine.
2. Database – This project will be hosted on a sql database. The Group will have access to this database, and permission to add tables as needed for the routes control system.
3. Web – The system will need to be integrated with the current library web page, which uses common web technologies. The Framework we will be using will be Larval (a php framework)

4. Map – The interactive map can be done by using Google Maps API, Yahoo! Maps or geolocation API, After some research of the various technologies, the Group has decided that Geolocation API works best for the project.
5. Geo-decoder – The system needs a geo-decoder to map longitude-latitude pairs into region/country codes/names. Currently, the Group has not found a public tool or service that provides this functionality. Without this tool, the Group will have to reside on a rough workaround, by first finding out the maximum and minimum longitude and latitude pairs of the various regions, and define a rectangular region in which a user may click on to select the region that the rectangular region is approximating.


**Feasibility:**
The feasibility study for a proposed Management system will be wide-spread. There are several components that should be included in the study, and each will be discussed.
**Intended Audience:**
The intended project for UET bus routes and tracking details is to develop a system for University of Engineering and Technology (UET) students, faculty, and staff to easily access information about bus routes and real-time tracking of buses. The system would allow users to view bus schedules, see the locations of buses in real-time, and receive notifications about delays or changes in bus routes. Additionally, the system could potentially include features such as the ability to plan a trip and receive estimated arrival times, and the ability to provide feedback on bus service. Overall, the goal of the project is to improve the efficiency and convenience of the UET bus system for its users.

**Suggested Deliverables:**

**Management Deliverables:**
1. Requirements Analysis – a document and a presentation to go over the formal requirements of the project, both functional and non-functional. This deliverable ensures that the Group is working on a system that closely matches to the wishes of the Client. 
2. Design Document – a document and a presentation to go over the design of the system. This is the Group’s opportunity to go over how the project is to be implemented to the Client. This deliverable is done by the more technical and experienced in the Group, based on the understanding of the requirements
established in the previous deliverable.
3. Source Code – a document, presentation along with the source code of the final completed project. This final deliverable wraps up and concludes the project.
In this deliverable, the Group delivers the final implementation based on the requirements specified and the design developed in previous stages. The system would have been tested thoroughly with unit tests and with a final
acceptance test and would be ready for deployment to the production system.

**Technical Deliverables:**
1. A database with the required tables to support the inventory system—a database needs to be set up on the library servers with the tables needed in the system to store the inventory information, geo-referenced materials, and other
cartographic data.
2. An administrative interface to add, modify, delete and search for inventory—a  webpage designed to allow the administrator (ie., the Client) of the system to add information to the inventory system for every map that is found in the library and to build up an electronic record of the resources that are found in the library.
3.A user interface to show all details of bou routes and and their live location.

**Software Development Process:**
The project will undertake the modified waterfall model because there is a well-defined set of requirements. As the Client has very specific needs for the system which will not likely change in a short timeframe, and given that this is a production system (not a research project), the modified waterfall model should be better suited and gives the
**Group the following benefits:**
1. Process visibility – both the Client and the Group are certain which stage of the development process the project is in.
2. Separation of tasks – the Group may concentrate on one area at a time, especially since some members of the Group have less experience in coding and in large scale software projects.
3. Quality control – a modified waterfall model allows the Group to spend more time on the requirements, understanding the design, and on developing better code (a programmer with less experience may have a difficult time delivering in short iterations in an iterative refinement model).

**Software Tools:**
•	HTML
•	CSS
•	PHP
•	Larval
•	Geolocation API
•	Google map API
•	Blade engine
•	JavaScript

**Usability:**
Usability for a live bus tracking and route details project for students at the University of Engineering and Technology (UET) would involve ensuring that the user interface is intuitive and easy to navigate. This can be achieved by:
Providing clear and concise information about bus routes, schedules, and real-time location updates.
Using a map-based interface to display bus locations and routes, making it easy for students to visualize the information.
Allowing students to search for specific bus routes and view detailed information, such as the number of stops and estimated arrival times.
Providing notifications and alerts for any delays or changes to bus schedules.
Making the system accessible via mobile devices, so students can access the information on-the-go.
Providing a feedback or suggestion section for the students, so they can provide feedback or report any issues they encounter.
Regularly testing the system with a group of representative students to ensure that it meets their needs and is easy to use. 

**Risk Analysis**
1. Changing Requirements:
Risk: The Client may have different ideas about the system during the course of the project
Solution: To reduce the possibility of this occurring, the Group needs to establish a clear visibility plan.
2. Incomplete Requirements:
Risk: It is possible that requirements may be implied but not discussed or misunderstood. This frequently occurs after meetings.
3. Lack of Resources, Tools:
Risk: For the project to meet one of the functional requirements a geo-decoding tool is needed. However, at the time of writing of this document,
No public/free tools can be found that can do this longitude-latitude pair and country conversion.
Solution: A workaround is proposed that would meet the minimal level of this requirement by defining the borders of the selection area to be a rectangle defined
By the maximum and minimum longitude and latitude pairs.
4. System Integration:
Risk: Depending on the level of access to the servers that the Group receives, the
Group may need to work on the system offline and eventually integrate with the
Production system when it is ready and thoroughly tested. Due to different
Software configuration, there may be unpredictable obstacles.
Solution: To ensure a smooth system integration, the Group needs to be aware of
As much about the configuration as early as possible.
5. Technical Requirements:
Risk: The software and hardware server environment are not perfectly certain at
This point. The client is not aware of the technical aspects of the project. The
Technical server configuration may have an effect on system architecture and
Design.
Solution: To resolve this problem, the Group has requested the client to refer the
Group to the technical staff working at the library for further inquiries.
6. Non-functional Requirements:
Risk: Similar to incomplete requirements, non-functional requirements is something that has not been brought up in the initial meeting requirements. These include requirements on the number of users that the system expects to support concurrently, and the response time of the database lookup.
Solution: A follow up meeting is needed to specify the non-functional requirements.
7. Human resources:
Risk: The Group is relatively small consisting of only 2 members, the other members is not technically oriented.

**Test cases:**
The test cases for the project "Uet bus live tracking and routes details with driver information using Larval and geolocation API on XAMPP with frontend containing admin and using dashboards" could include the following:
**Frontend:**
Check if the bus location, routes, and driver information are displayed correctly on the map.
Check if the admin section is only accessible by the administrator.
Check if the dashboards are interactive and display the data correctly.

**Backend:**
Check if the data communication between the frontend and the geolocation API is working correctly.
Check if the data is stored and retrieved correctly from the database.
Geolocation API:
Check if the API is providing the correct location data of the buses in real-time.

**Security:**
Check if the system is protected against common security vulnerabilities such as SQL injection and XSS attacks.
**Performance:**
Check if the system is able to handle a large number of users and requests without any issues.
**Error handling:**
Check if the system is able to handle and display appropriate error messages in case of any errors.
**Usability:**
Check if the system is easy to use and navigate for the users.
Mobile compatibility:
Check if the system is compatible and responsive on different mobile devices.
**Integration:**
Check if the integration of the frontend and backend is working correctly.
**Accessibility:**
Check if the system is accessible and usable for people with disabilities.
These test cases will ensure that the system is functioning correctly and meet the requirement in terms of functionality, performance, security, usability, and accessibility.

**Test study**
A test study for the project "Uet bus live tracking and routes details with driver information using Larval and geolocation API on XAMPP with frontend containing admin and using dashboards" would involve the following steps:
Prepare the test environment: 
Set up the XAMPP stack and configure the necessary components such as Apache, MySQL, and PHP.
Test case execution: 
Execute the test cases previously defined to check the system's functionality, performance, security, usability, and accessibility.
Test data preparation:
 Prepare test data such as bus routes, driver information, and location data to be used during the test execution.
Test execution:
 Test the system by simulating different scenarios and conditions, such as a high number of users, different devices and browsers, different connection speeds, etc.
Test result analysis:
 Analyze the test results and compare them with the expected results. Document any discrepancies or bugs found during the testing.
Test report preparation:
 Prepare a test report that summarizes the test results, including the number of test cases executed, the number of test cases passed and failed, and any issues found during the testing.
Test closure:
 Close the test phase after all the test cases have been executed successfully, and all the issues have been resolved.
Test evaluation: 
Evaluate the test process, identify areas for improvement and make necessary changes for the next testing phase.
This test study will help to identify and resolve any issues in the system before its final deployment, and ensure that the system meets the requirements and is functioning correctly.


**UI Design of Our Project:**
Login/Signup page:

![image](https://user-images.githubusercontent.com/89600478/217435918-3090f2bd-47f8-4fde-b28a-a4d49dc1e404.png)

 
**Admin Home page:**
 
![image](https://user-images.githubusercontent.com/89600478/217435936-a7970ef6-05ed-4a16-9f31-0f622559eee4.png)






**User Homepage:**
 
![image](https://user-images.githubusercontent.com/89600478/217435966-fa253659-2cbf-4857-8de1-39af7f84cd3b.png)



**Routes detail:**

 
![image](https://user-images.githubusercontent.com/89600478/217435981-9f729a5e-7016-4745-91c2-e7bd60964210.png)
![image](https://user-images.githubusercontent.com/89600478/217435998-9f3b156c-e431-4204-b66e-9f8d7e203e5f.png)


 


**Data-Base:**
We have used MySQL for this project. And the relationships can be seen below in the figure which is known as ERD-Diagram (Entity Relationship Diagram).



**Database Table:**

 ![image](https://user-images.githubusercontent.com/89600478/217436031-88060bef-eb90-4304-8c08-fe1a11ae3fea.png)

**Schema:**

 ![image](https://user-images.githubusercontent.com/89600478/217436044-3c0d54e8-41f0-4660-9b58-ebc9e0b37683.png)







**Conclusion:**
In conclusion, the UET bus live routes and tracking system is a useful tool for students, staff, and faculty at the University of Engineering and Technology. It allows users to track the location and estimated arrival time of buses in real-time, making it easier to plan their commutes and navigate the campus. Additionally, the system helps the university to improve the efficiency and safety of its transportation services by providing real-time data on bus movements. Overall, the implementation of this system has been successful in meeting its goals and has received positive feedback from users.


**References:**
[1] https://www.apm.org.uk/resources/find-a-resource/agile-project-management/
[2]https://www.google.com/search?client=opera&q=what+is+geolocation+api&sourceid=opera&ie=UTF-8&oe=UTF-8


