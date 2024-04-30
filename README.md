## PHP MVC Framework
![alt text](public\images\logo.png)
**Mitochondria** is the powerhouse of the cell and this is a lightweight and easy-to-use MVC (Model-View-Controller) framework named **Mitochondria** for building web applications in PHP. It adheres to the principles of the MVC architectural pattern, separating the application logic into three distinct but interconnected components: Model, View, and Controller.

**Features**

* **Routing:** Offers a simple and flexible URL routing mechanism to map incoming URLs to specific controllers and actions within those controllers.
* **Controllers:** Act as the central point for handling incoming requests. They process data associated with the request, interact with models to retrieve or manipulate data, and ultimately pass the processed data to the views for presentation.
* **Models:** Encapsulate the data structure of the application and handle the business logic. They are responsible for interacting with databases, performing data manipulation, and providing a layer of abstraction between the application and the data storage mechanism.
* **Views:** Responsible for rendering the user interface. They typically combine static HTML or PHP code with dynamic data received from the controllers and models to generate the final user experience.
* **Database Integration:** Provides built-in support for integrating with databases. This may include features like query builders and the ability to define relationships between models.
* **Middleware:** Offers a middleware layer that allows developers to execute code before and after processing requests. This enables functionalities like authentication, logging, or request transformation to be implemented in a modular and reusable way.
