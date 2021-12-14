use Project_Portal;

INSERT IGNORE INTO User (email, pass, first_name, last_name, role_id) VALUES 
    ("student1@gmail.com", "pass", "Student", "One", 1),
    ("student2@gmail.com", "pass", "Student", "Two", 1),
    ("admin1@gmail.com", "pass", "Admini", "One", 2);

INSERT IGNORE INTO Project (project_name, admin_name, admin_company, admin_email, project_description, project_skills, project_resources) VALUES
    ("Improve a real-world chatbot serving millions of people and learn basis of Machine Learning and Natural Language Processing",
     "Giovanni Conserva", "SYRG", "giovannibconserva@gmail.com", "The job marketplace is changing, including the way people are hired. An artificial intelligence company called Paradox recently raised 60 Million for building interactive
hiring services based on a chatbox https://www.paradox.ai/ Meanwhile, our company has
helped thousands of people to get hired through our automated chatbot.
In this project, you will learn the basis of Natural Language Processing, and you will work
on techniques to improve the accuracy of our chatbot. You’ll be able to apply these skills
to build your own chatbots and AI-powered systems. No background is required (except
passion for learning). Software engineering skills are helpful but can be learned during the
project", "TBD", "Resources can be made available upon request."),
    ("Fleet management dashboard for cellular connected electric boats",
     "Jonathan Lord", "Flux Marine LLC", "jlord@fluxmarine.com", "Flux Marine has built the first electric marine propulsion system that is a direct
replacement for gasoline outboards. Electric systems offer a vast array of benefits over traditional combustion systems including IOT connectivity and control. The goal of this project
is to build a dashboard that can be used as a centralized fleet management system to keep
track of boat usage metrics across multiple systems. Metrics include battery state of charge,
boat usage, speed profile and others. Initial data will be received from a Particle.io device.
Deliverables can be adjusted to suit the interests of the student with web applications and/or
smart phones apps being an appropriate solution. For those sufficiently successful with the
project, there is the opportunity for continued work beyond the scope of this class. A more
detailed SOW and set of deliverables can be provided, if interested.", " C, C++ or C# (preferred)", "Resources can be made available upon request."),
    ("Website Development - Real Estate Investment Firm",
     "Adam Steiner", "Sydenham Capital Inc", "adamdansteiner@gmail.com",
     "Sydenham Capital is an investment firm that acquires mixed-use real estate in
Southern Ontario. We syndicate our acquisitions with a group of investors. Project Scope
We would like a new website for our organization Sydenham Capital. We aren’t sure which
platform we would like for it to be built on, but we have an idea of what we would like it to
do. We would like to work with students to develop a new website for us.
Here are a few examples of websites that can help guide us:
– www.beachwold.com
– https://liverangewater.com/
– https://timberlandpartners.com/
– https://www.waypointresidential.com/
– https://northland.com/
Students should be prepared to:
– Conduct a needs analysis to determine which platform is most suitable.
– Create a design proposal including mock-ups, budget, and timeline.
– Build a fully-functioning website.
– Provide training on updating and maintaining the site.",
 "TBD", "Resources can be made available upon request."),
    ("A Portal for Managing Students Capstone Project",
     "Kenneth Fletcher", "UMass Boston", "kenneth.fletcher@umb.edu", "I am looking for a web-based application to manage projects for my software
engineering/ development courses. The application should have the following functionalities:
– Prospective clients should be able to post projects.
– Students should be able to review the projects posted.
– Students should be able to submit their project preferences.
– The application should be able to put students in groups based on an algorithm I will
provide.
– Have a nice user interface.", "TBD", "Resources can be made available upon request."),
    ("Mobile App MVP Development on the People-First @platform",
     "Denise Daniels", "The @ Company", "denise@atsign.com,",
     "We are internet optimists. We believe in the internet and all it has to offer.
And, we want to make the internet better. How? Well, tech luminaries Kevin Nickels and
Colin Constable decided to go to the core. They developed an open-source technology at
the protocol level. No more client-server thinking, no more authentication nightmares and
walled gardens, no more entering the same data ad nauseam into a data center owned by
somebody else. With the @protocol and your personal @sign, you get your own keys to
your own datadom, your own micro-server, and a world of people-first apps where you mix
and match them using your @sign to seamlessly move around the internet without being
surveilled. Does that sound optimistic, or what?
Design and architect a mobile app on the Privacy-First Internet: Design and architect a
privacy-conscious mobile app that is incredibly useful and ridiculously fun. Using Dart and
Flutter, you’ll build your app on the @protocol, our open-source, Permissions-based protocol
that makes end-to-end encryption and total security possible.
Who You Are:
– You’re a self-starter with the desire to build your own app and bring it to market.
– You’re a current college student or recent college graduate, ideally with a major in
Computer Science or Entrepreneurship.
– You have experience with one or more programming languages such as Javascript,
React, or similar frameworks. Since our technology relies on Dart and Flutter, any
Dart or Flutter knowledge is a plus.",
"TBD", "Resources can be made available upon request"),
    ("Real-time Real Estate Investment Analysis",
     "Esi Adeborna", "Adeborna Rentals", "kenneth.fletcher@umb.edu",
     "We are a real estate investment company who wishes to develop different calculators to help real estate investors analyze their investments. Specifically, we are looking
to build user interfaces to help visualize results from our real estate calculators. Our goal
is to be able to visualize and annotate properties on a map. We wish to have a responsive
interactive web application or mobile application that will use google maps API to display
locations of properties that are filtered from our real estate investment calculators.",
 "– Mobile application development technologies, or
– Web application.", "Resources can be made available upon request");