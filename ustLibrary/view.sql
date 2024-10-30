CREATE OR REPLACE VIEW college_section_view AS
SELECT colleges.* , sectionsofcollege.* FROM colleges 
INNER JOIN sectionsofcollege ON sectionsofcollege.college_ID = colleges.collegeID;

=====================


CREATE OR REPLACE VIEW booksSections_view AS
SELECT sectionsofcollege.* , books.* FROM sectionsofcollege 
INNER JOIN books ON books.section_id = sectionsofcollege.sectionID;

=====================

CREATE VIEW lastdownloadings_view AS
SELECT 
    s.studentName,     
    s.studentNumber,    
    b.booksName,       
    b.booksPath   
FROM 
    lastdownloadings ld
JOIN 
    students s ON ld.students_id = s.studentsID
JOIN 
    books b ON ld.books_id = b.bookID;
