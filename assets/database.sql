create table categorie(
	idcategorie int AUTO_INCREMENT primary key,
	nom varchar(50)
);

insert into categorie(idcategorie, nom) values
('1','Sport'),('2','Business');

create table article(
    idarticle int AUTO_INCREMENT primary key,
	idcategorie int,
    titre varchar(100),
	info varchar(100),
	details varchar(200),
	image varchar(50),
	sortie date
);

insert into article(idarticle, idcategorie, titre, info, details, image, sortie) values
('1','1','Luis Suárez promises not to celebrate scoring against Liverpool at Anfield','I think there will be more applause than whistles, says Suárez. Barcelona coach Ernesto Valverde warns against complacency','The Barcelona forward upset some of his former club s supporters during last week s first leg by celebrating his opening goal and goading Jürgen Klopp s players; behaviour that was hardly out of character with his time at Liverpool. Suárez offered a qualified apology to any Liverpool fan annoyed by his reaction to scoring in Barcelona s 3-0 victory and anticipates that, after 82 goals in 133 appearances for the Merseyside club, he will be well received at Anfield.','a1.png','2019-05-02');
('2','1','Manchester City take title lead into last day as Kompany goal beats Leicester','No wonder every single player made a beeline for Kompany at the final whistle','Perhaps Gary Neville put it best in his commentary role from the television gantry: Where do you want your statue, Vincent Kompany? It was, without question, the goal of a lifetime from the Manchester City captain and the rewards will be measured in silver if his team can extend their winning 13-game sequence by just one more match. It is simple now: a win at Brighton on Sunday and there will be nothing Liverpool, a point behind in second position, can do about it.','a2.png','2019-05-02');
('3','2','Markets slide after Trump threatens to dramatically increase China tariffs','Stocks in US and Europe sell off after president threatens to more than double tariffs','Financial markets around the world posted declines on Monday after Donald Trump risked jeopardising trade talks with China by unexpectedly saying he would raise tariffs further on Chinese goods this week. Stocks in Europe and the US fell following a sharp retreat in China, as investors were caught off guard by the president s tweets accusing Beijing of seeking to renegotiate the deal before further discussions scheduled for this week in Washington.','a3.png','2019-05-02');
('4','2','Labour-backed report urges trials of universal basic income','John McDonnell,who commissioned study, hints a form of UBI could become policy','A Labour-basked report has called for the launch of universal basic income trials across the UK. Universal basic income (UBI), which takes the form of regular cash payments from the government to all adult citizens, has emerged as a popular concept in recent years because it could top up low pay and reduce inequality. A feasibility study commissioned by the shadow chancellor, John McDonnell, said a pilot scheme would work in the UK. Although the report does not represent Labour policy, its publication is likely to be viewed as moving the party closer towards testing a form of UBI should it be voted into power.','a4.png','2019-05-02');