<b>Everything I put my hands on.</b>
<p>
I usually create projects and generate ideas. This time around am talking about the projects I have ever worked on.

I want to show the project name, the time it took, and a summary of the whole project. I also want to show the flow of events for such a project optionally. The projects should be filtered from different angles. It should also include people worked with who can be seen upon their consent.
</p>

<h3>Database designs</h3>
<h6>Entities</h6>
1.     Project
2.     Event
3.     Category
4.     User

###### Relationships

1. Project -> Event (1: N)
2. Project -> Category (M: N)
3. Project -> User (M: N)

##### Attributes

###### Project

* Name
* Start date
* End date
* Description
* Link

###### Event

* Name
* Start date
* End date

###### Category

* Name

###### User

* Email
* Name
* Etc

###### ProjectCategory

~~Project
Category
UserProjects
User
Project~~


