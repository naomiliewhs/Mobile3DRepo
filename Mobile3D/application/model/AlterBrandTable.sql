-- SQLite
DROP TABLE Brand_Data;
CREATE TABLE Brand_Data (Id INTEGER PRIMARY KEY, brand TEXT, title TEXT, subtitle TEXT, description TEXT);
INSERT INTO Brand_Data (Id, brand, title, subtitle, description)
VALUES (1, 'main', 'Everyones Family', 'Founded in 1886 Dr John S Pemberton', 'The Coca Cola Company is the worlds leading manufacturer, marketer and distributor of non-alcoholic beverage concentrates and syrups, and produces nearly 400 brands.');

INSERT INTO Brand_Data (Id, brand, title, subtitle, description)
VALUES (2, 'coke', 'Coca Cola', 'New York Harbour, 1886', 'It was 1886, John Pemberton, an Atlanta pharmacist, was inspired by simple curiosity. One afternoon, he stirred up a fragrant, caramel-coloured liquid and, when it was done, the mixture was combined with carbonated water and sampled by customers who all agreed - this new drink was something special!');

INSERT INTO Brand_Data (Id, brand, title, subtitle, description)
VALUES (3, 'drpepper', 'Dr Pepper', 'Texas, 1885', 'Dr Peppers unique, sparkling blend of 23 fruit flavours has been around for well over a century and its still the same, with that distinctive flavour you just cant quite put your tongue on. It was created by Texas pharmacist Charles Alderton in 1885. The distinctive, bold taste of Dr Pepper has been popular ever since.');

INSERT INTO Brand_Data (Id, brand, title, subtitle, description)
VALUES (4, 'fanta', 'Fanta', 'Germany, 1940', 'During the Second World War, the US established a trade embargo against Nazi Germany, making the export of Coca-Cola syrup difficult. To circumvent this, Max Keith, the head of Coca-Cola Deutschland (Coca-Cola GmbH), decided to create a new product for the German market, using only ingredients available in Germany at the time, including beet sugar, whey (a cheese byproduct), and apple pomace—the "leftovers of leftovers", as Keith later recalled. The name was the result of a brainstorming session, which started with Keiths exhorting his team to "use their imagination" (Fantasie in German), to which one of his salesmen, Joe Knipp, retorted "Fanta!".');

INSERT INTO Brand_Data (Id, brand, title, subtitle, description)
VALUES (5, 'schweppes', 'Schweppes', 'Geneva, 1783', 'In the late 18th century, German-Genevan scientist Johann Jacob Schweppe developed a process to manufacture bottled carbonated mineral water based on the discoveries of English chemist Joseph Priestley. Schweppe founded the Schweppes Company in Geneva in 1783 to sell carbonated water.');
