-- MySQL dump 10.13  Distrib 5.6.24, for osx10.8 (x86_64)
--
-- Host: 127.0.0.1    Database: ideas
-- ------------------------------------------------------
-- Server version	5.5.42

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `addresses`
--

DROP TABLE IF EXISTS `addresses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `addresses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `address_2` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `zip` int(11) DEFAULT NULL,
  `state_id` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_clients_states1_idx` (`state_id`),
  CONSTRAINT `fk_clients_states1` FOREIGN KEY (`state_id`) REFERENCES `states` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `addresses`
--

LOCK TABLES `addresses` WRITE;
/*!40000 ALTER TABLE `addresses` DISABLE KEYS */;
/*!40000 ALTER TABLE `addresses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_admins_users1_idx1` (`user_id`),
  CONSTRAINT `fk_admins_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admins`
--

LOCK TABLES `admins` WRITE;
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Author',NULL,NULL),(2,'Subject',NULL,NULL),(3,'Era',NULL,NULL),(4,'Location',NULL,NULL);
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories_has_images`
--

DROP TABLE IF EXISTS `categories_has_images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories_has_images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) DEFAULT NULL,
  `image_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories_has_images`
--

LOCK TABLES `categories_has_images` WRITE;
/*!40000 ALTER TABLE `categories_has_images` DISABLE KEYS */;
/*!40000 ALTER TABLE `categories_has_images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ideas`
--

DROP TABLE IF EXISTS `ideas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ideas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `description` text,
  `inventory` int(11) DEFAULT NULL,
  `number_sold` int(11) DEFAULT NULL,
  `price` decimal(2,0) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ideas`
--

LOCK TABLES `ideas` WRITE;
/*!40000 ALTER TABLE `ideas` DISABLE KEYS */;
INSERT INTO `ideas` VALUES (1,'Stoicism','A Hellenistic school with the principle that self-control, both emotional and physical, leads to an inner strength and character that enables one to harmoniously interact with the natural world. It is often contrasted with Epicureanism.',NULL,NULL,NULL,NULL,NULL),(2,'Epicureanism','While often considered to be the philosophy of pleasure seeking, in fact refers to a middle-path philosophy defining happiness as success in avoiding pain, in the form of both mental worry and physical discomfort, in order to produce a state of tranquility.',NULL,NULL,NULL,NULL,NULL),(3,'Utilitarianism','A theory of ethics that maintains an act is moral if and only if it maximizes welfare.',NULL,NULL,NULL,NULL,NULL),(4,'Deontology','An ethical theory considered solely on duty and rights, where one has an unchanging moral obligation to abide by a set of defined principles. Thus, the ends of any action never justify the means in this ethical system. If someone were to do their moral duty, then it would not matter if it had negative consequences. Therefore, consequentialism is the philosophical antithesis of this theory.',NULL,NULL,NULL,NULL,NULL),(5,'Determinism','The philosophical proposition that every event, including human cognition, decision and action, is causally determined by an unbroken chain of prior occurrences.',NULL,NULL,NULL,NULL,NULL),(6,'Dualism','A set of beliefs that begins with the claim that the mental and the physical have a fundamentally different nature. It is contrasted with varying kinds of monism, including materialism and phenomenalism. Dualism is one answer to the mind-body problem. Pluralism holds that there are even more kinds of events or things in the world.',NULL,NULL,NULL,NULL,NULL),(7,'Cynicism','Cynicism was originally the philosophy of a group of ancient Greeks called the Cynics, founded by Antisthenes. Nowadays the word generally refers to the opinions of those inclined to disbelieve in human sincerity, in virtue, or in altruism: individuals who maintain that only self-interest motivates human behavior. A modern cynic typically has a highly contemptuous attitude towards social norms, especially those that serve more of a ritualistic purpose than a practical one, and will tend to dismiss a substantial proportion of popular beliefs, conventional morality and accepted wisdom as irrelevant or obsolete nonsense.',NULL,NULL,NULL,NULL,NULL),(8,'Communism','A theoretical system of social organization and a political movement based on common ownership of the means of production. As a political movement, communism seeks to establish a classless society. A major force in world politics since the early 20th century, modern communism is generally associated with The Communist Manifesto of Karl Marx and Friedrich Engels, according to which the capitalist profit-based system of private ownership is replaced by a communist society in which the means of production are communally owned, such as through a gift economy.',NULL,NULL,NULL,NULL,NULL),(9,'Capitalism','An economic system in which all or most of the means of production are privately owned and operated (usually through employing wage labour, and for profit), and in which the investment of capital and the production, distribution and prices of commodities and services are determined mainly in a free market.',NULL,NULL,NULL,NULL,NULL),(10,'Anarcho-primitivism','An anarchist critique of the origins and progress of civilization. Primitivists argue that the shift from hunter-gatherer to agricultural subsistence gave rise to social stratification, coercion, and alienation. They advocate a return to non-\"civilized\" ways of life through deindustrialisation, abolition of division of labour or specialization, and abandonment of technology.',NULL,NULL,NULL,NULL,NULL),(11,'Aristotelianism','Sometimes contrasted by critics with the rationalism and idealism of Plato, Aristotelianism is understood by its proponents as critically developing Plato\'s theories. Most particularly, Aristotelianism brings Plato\'s ideals down to Earth as goals and goods internal to natural species that are realized in activity. This is the characteristically Aristotelian idea of teleology.',NULL,NULL,NULL,NULL,NULL),(12,'Agnosticism','The philosophical view that the truth values of certain claims — particularly theological claims regarding the existence of God, gods, or deities — are unknown, inherently unknowable, or incoherent, and therefore, (some agnostics may go as far to say) irrelevant to life.',NULL,NULL,NULL,NULL,NULL),(13,'Existentialism','The philosophical movement that views human existence as having a set of underlying themes and characteristics, such as anxiety, dread, freedom, awareness of death, and consciousness of existing, that are primary. That is, they cannot be reduced to or explained by a natural-scientific approach or any approach that attempts to detach itself from or rise above these themes.',NULL,NULL,NULL,NULL,NULL),(14,'Transcendental Idealism','The philosophy of Immanuel Kant and later Kantian and German Idealist philosophers; a view according to which our experience is not about the things as they are in themselves, but about the things as they appear to us. It differs from standard (empirical) idealism in that it does not claim that the objects of our experiences would be in any sense within our mind. The idea is that whenever we experience something, we experience it as it is for ourselves: the object is real as well as mind-independent, but is in a sense corrupted by our cognition (by the categories and the forms of sensibility, space and time). Transcendental idealism denies that we could have knowledge of the thing in itself.',NULL,NULL,NULL,NULL,NULL),(15,'Logical Positivism','A philosophy (of science), that originated in the Vienna Circle in the 1920s, which holds that philosophy should aspire to the same sort of rigor as science. Philosophy should provide strict criteria for judging sentences true, false and meaningless. Although the logical positivists held a wide range of beliefs on many matters, they all shared an interest in science and deep skepticism of the theological and metaphysical. Following Wittgenstein, many subscribed to the correspondence theory of truth, although some, like Neurath, believed in coherentism. They believed that all knowledge should be based on logical inference from simple \"protocol sentences\" grounded in observable facts. Hence many supported forms of realism, materialism, philosophical naturalism, and empiricism.',NULL,NULL,NULL,NULL,NULL),(16,'Romanticism','A philosophy that expresses art as an emotional experience based on the appreciation of the aesthetic. In other words, Romanticism is a philosophy where art is celebrated due to the emotional reaction on the part of the receiver.',NULL,NULL,NULL,NULL,NULL),(17,'Relativism','The view that the meaning and value of human beliefs and behaviors have no absolute reference. Relativists claim that humans understand and evaluate beliefs and behaviors only in terms of, for example, their historical and cultural context. Philosophers identify many different kinds of relativism depending upon what allegedly depends on something and what something depends on.',NULL,NULL,NULL,NULL,NULL),(18,'Pragmatism','Philosophy that originated in the United States in the late 19th century. Pragmatism is characterized by the insistence on consequences, utility and practicality as vital components of meaning and truth. Pragmatism objects to the view that human concepts and intellect represent reality, and therefore stands in opposition to both formalist and rationalist schools of philosophy. Rather, pragmatism holds that it is only in the struggle of intelligent organisms with the surrounding environment that theories acquire significance, and only with a theory\'s success in this struggle that it becomes true.',NULL,NULL,NULL,NULL,NULL),(19,'Phenomenology','In epistemology and the philosophy of perception, phenomenalism is the view that physical objects do not exist as things in themselves but only as perceptual phenomena or sensory stimuli (e.g. redness, hardness, softness, sweetness, etc.) situated in time and in space. In particular, phenomenalism reduces talk about physical objects in the external world to talk about bundles of sense-data.',NULL,NULL,NULL,NULL,NULL),(20,'Structuralism','The theory that elements of human culture must be understood in terms of their relationship to a larger, overarching system or structure. It works to uncover the structures that underlie all the things that humans do, think, perceive, and feel. ',NULL,NULL,NULL,NULL,NULL),(21,'Platonic Idealism','The belief that the entities of the phenomenal world are imperfect reflections of an ideal truth. In metaphysics sometimes used to mean the claim that universals exist independent of particulars.',NULL,NULL,NULL,NULL,NULL),(22,'Materialism','The philosophical view that the only thing that can truly be said to \'exist\' is matter; that fundamentally, all things are composed of \'material\' and all phenomena are the result of material interactions.',NULL,NULL,NULL,NULL,NULL),(23,'Mentalism','The view, in philosophy of mind, that the mind and mental states exist as causally efficacious inner states of persons. The view should be distinguished from substance dualism, which is the view that the mind and the body (or brain) are two distinct kinds of things, which nevertheless interact (somehow) with one another. Although this dualistic view of the mind-body connection entails mentalism, mentalism does not entail dualism. Jerry Fodor and Noam Chomsky have been two of mentalism\'s most ardent recent defenders.',NULL,NULL,NULL,NULL,NULL),(24,'Absurdism','Philosophy stating that the efforts of man to find meaning in the universe will ultimately fail because no such meaning exists (at least in relation to man). ',NULL,NULL,NULL,NULL,NULL),(25,'Nihilism','A philosophical view that the world, and especially human existence, is without meaning, purpose, comprehensible truth, or essential value. It is more often a charge leveled against a particular idea than a position to which someone is overtly subscribed.',NULL,NULL,NULL,NULL,NULL),(26,'Panpsychism','Either the view that all parts of matter involve mind, or the more holistic view that the whole universe is an organism that possesses a mind. It is thus a stronger and more ambitious view than hylozoism, which holds only that all things are alive. This is not to say that panpsychism believes that all matter is alive or even conscious but rather that the constituent parts of matter are composed of some form of mind and are sentient.',NULL,NULL,NULL,NULL,NULL),(27,'Epiphenomenalism','The view in philosophy of mind according to which physical events have mental effects, but mental events have no effects of any kind. In other words, the causal relations go only one way, from physical to mental.',NULL,NULL,NULL,NULL,NULL),(28,'Ethical Egoism','The normative ethical position that moral agents ought to do what is in their own self-interest. It is distinguished from psychological egoism and rational egoism. It contrasts with ethical altruism, which holds that moral agents have an ethical obligation to help or serve others. Ethical egoism does not, however, require moral agents to disregard the well-being of others, nor does it require that a moral agent refrains from considering the well-being of others in moral deliberation. What is in an agent\'s self-interest may be incidentally detrimental to, beneficial to, or neutral in its effect on others. It allows for the possibility of either as long as what is chosen is efficacious in satisfying self-interest of the agent. ',NULL,NULL,NULL,NULL,NULL),(29,'Monism','The metaphysical and theological view that there is only one principle, essence, substance or energy. Monism is to be distinguished from dualism, which holds that ultimately there are two principles, and from pluralism, which holds that ultimately there are many principles.',NULL,NULL,NULL,NULL,NULL),(31,'Virtue Ethics','Virtue ethics emphasize the role of one\'s character and the virtues that one\'s character embodies for determining or evaluating ethical behavior.',NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `ideas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ideas_has_images`
--

DROP TABLE IF EXISTS `ideas_has_images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ideas_has_images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idea_id` int(11) DEFAULT NULL,
  `image_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ideas_has_images`
--

LOCK TABLES `ideas_has_images` WRITE;
/*!40000 ALTER TABLE `ideas_has_images` DISABLE KEYS */;
INSERT INTO `ideas_has_images` VALUES (1,31,2,NULL,NULL),(2,16,3,NULL,NULL),(3,7,4,NULL,NULL),(4,1,5,NULL,NULL);
/*!40000 ALTER TABLE `ideas_has_images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ideas_has_tags`
--

DROP TABLE IF EXISTS `ideas_has_tags`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ideas_has_tags` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idea_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_ideas_has_tags_ideas_idx` (`idea_id`),
  KEY `fk_ideas_has_tags_tags1_idx` (`tag_id`),
  CONSTRAINT `fk_ideas_has_tags_ideas` FOREIGN KEY (`idea_id`) REFERENCES `ideas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_ideas_has_tags_tags1` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=143 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ideas_has_tags`
--

LOCK TABLES `ideas_has_tags` WRITE;
/*!40000 ALTER TABLE `ideas_has_tags` DISABLE KEYS */;
INSERT INTO `ideas_has_tags` VALUES (1,1,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(2,1,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(3,1,5,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(4,1,3,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(5,1,37,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(6,1,38,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(7,2,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(8,2,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(9,2,5,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(10,2,10,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(11,2,32,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(12,3,47,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(13,3,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(14,3,12,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(15,3,13,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(16,3,29,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(17,3,33,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(18,4,3,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(19,4,12,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(20,4,25,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(21,4,16,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(22,4,20,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(23,4,24,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(24,5,6,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(25,5,37,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(26,5,19,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(27,5,39,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(28,5,41,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(29,5,43,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(30,5,34,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(31,6,20,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(32,6,48,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(33,6,13,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(34,6,14,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(35,6,10,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(36,6,11,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(37,6,12,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(38,7,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(39,7,10,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(40,7,5,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(41,7,49,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(42,7,50,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(43,7,12,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(44,8,51,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(45,8,52,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(46,8,53,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(47,8,14,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(48,8,9,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(49,8,12,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(50,9,9,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(51,9,24,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(52,9,54,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(53,10,56,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(54,10,9,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(55,10,12,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(56,10,55,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(57,11,13,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(58,11,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(59,11,10,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(60,11,11,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(61,11,28,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(62,11,48,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(63,12,24,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(64,12,57,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(65,12,26,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(66,12,27,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(67,12,12,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(68,6,58,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(69,13,58,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(70,12,6,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(71,13,5,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(72,13,12,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(73,13,26,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(74,13,30,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(75,13,31,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(76,13,34,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(77,14,3,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(78,14,12,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(79,14,6,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(80,14,25,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(81,14,44,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(82,14,41,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(83,15,23,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(84,15,23,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(85,15,7,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(86,15,3,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(87,15,4,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(88,15,59,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(89,16,8,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(90,16,36,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(91,16,60,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(92,17,40,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(93,17,7,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(94,17,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(95,18,4,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(96,18,7,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(97,18,43,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(98,18,42,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(99,18,12,'0000-00-00 00:00:00',NULL),(100,19,61,'0000-00-00 00:00:00',NULL),(101,19,3,'0000-00-00 00:00:00',NULL),(102,19,6,'0000-00-00 00:00:00',NULL),(103,19,7,'0000-00-00 00:00:00',NULL),(104,20,62,'0000-00-00 00:00:00',NULL),(105,20,58,'0000-00-00 00:00:00',NULL),(106,20,12,'0000-00-00 00:00:00',NULL),(107,21,1,NULL,NULL),(108,21,7,NULL,NULL),(109,21,14,NULL,NULL),(110,21,13,NULL,NULL),(111,22,32,NULL,NULL),(112,22,41,NULL,NULL),(113,22,51,NULL,NULL),(114,22,6,NULL,NULL),(115,21,6,NULL,NULL),(116,23,6,NULL,NULL),(117,23,7,NULL,NULL),(118,23,18,NULL,NULL),(119,24,12,NULL,NULL),(120,24,58,NULL,NULL),(121,24,30,NULL,NULL),(122,24,5,NULL,NULL),(123,24,26,NULL,NULL),(124,25,34,NULL,NULL),(125,25,5,NULL,NULL),(126,25,12,NULL,NULL),(127,26,39,NULL,NULL),(128,26,6,NULL,NULL),(129,26,43,NULL,NULL),(130,27,6,NULL,NULL),(131,27,20,NULL,NULL),(132,28,5,NULL,NULL),(133,28,32,NULL,NULL),(134,28,54,NULL,NULL),(135,28,34,NULL,NULL),(136,28,19,NULL,NULL),(137,29,6,NULL,NULL),(138,29,39,NULL,NULL),(139,31,1,NULL,NULL),(140,31,13,NULL,NULL),(141,31,14,NULL,NULL),(142,31,5,NULL,NULL);
/*!40000 ALTER TABLE `ideas_has_tags` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `alt_text` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `images`
--

LOCK TABLES `images` WRITE;
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
INSERT INTO `images` VALUES (1,'Collage of pictures of famous philosophers','authors.jpg',NULL,NULL),(2,'The Death of Socrates by Jacques-Louis David','socrates.jpg',NULL,NULL),(3,'Wanderer over a Sea of Fog by Caspar David Friedrich','wanderer.jpg',NULL,NULL),(4,'Diogenes of Sinope Jean-Léon Gérôme','diogenes.jpg',NULL,NULL),(5,'Bust of Marcus Aurelius','marcus_aurelius.png',NULL,NULL),(6,'Statue of Augustus','augustus.png',NULL,NULL),(7,'Melk Abbey Library','melk_abbey_library.jpg',NULL,NULL),(8,'Image of the parthenon','parthenon.jpg',NULL,NULL),(9,'18th century French intellectual salon','salon.jpg',NULL,NULL),(10,'The School of Athens by Raphael','school_of_athens.jpg',NULL,NULL),(11,'Image of old books','subjects.jpg',NULL,NULL);
/*!40000 ALTER TABLE `images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order_statuses`
--

DROP TABLE IF EXISTS `order_statuses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `order_statuses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL COMMENT '	',
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order_statuses`
--

LOCK TABLES `order_statuses` WRITE;
/*!40000 ALTER TABLE `order_statuses` DISABLE KEYS */;
/*!40000 ALTER TABLE `order_statuses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `stripe_token` int(11) DEFAULT NULL,
  `order_status_id` int(11) NOT NULL,
  `shipping_address_id` int(11) NOT NULL,
  `billing_address_id` int(11) NOT NULL,
  `total_price` decimal(2,0) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_orders_users1_idx1` (`user_id`),
  KEY `fk_orders_order_statuses1_idx` (`order_status_id`),
  KEY `fk_orders_clients1_idx` (`shipping_address_id`),
  KEY `fk_orders_clients2_idx` (`billing_address_id`),
  CONSTRAINT `fk_orders_clients1` FOREIGN KEY (`shipping_address_id`) REFERENCES `addresses` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_orders_clients2` FOREIGN KEY (`billing_address_id`) REFERENCES `addresses` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_orders_order_statuses1` FOREIGN KEY (`order_status_id`) REFERENCES `order_statuses` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_orders_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders_has_ideas`
--

DROP TABLE IF EXISTS `orders_has_ideas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders_has_ideas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) DEFAULT NULL,
  `idea_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_orders_has_ideas_ideas1_idx` (`idea_id`),
  KEY `fk_orders_has_ideas_orders1_idx` (`order_id`),
  CONSTRAINT `fk_orders_has_ideas_ideas1` FOREIGN KEY (`idea_id`) REFERENCES `ideas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_orders_has_ideas_orders1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders_has_ideas`
--

LOCK TABLES `orders_has_ideas` WRITE;
/*!40000 ALTER TABLE `orders_has_ideas` DISABLE KEYS */;
/*!40000 ALTER TABLE `orders_has_ideas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shopping_cart`
--

DROP TABLE IF EXISTS `shopping_cart`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `shopping_cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shopping_cart`
--

LOCK TABLES `shopping_cart` WRITE;
/*!40000 ALTER TABLE `shopping_cart` DISABLE KEYS */;
/*!40000 ALTER TABLE `shopping_cart` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shopping_cart_has_ideas`
--

DROP TABLE IF EXISTS `shopping_cart_has_ideas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `shopping_cart_has_ideas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `shopping_cart_id` int(11) DEFAULT NULL,
  `idea_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_shopping_cart_has_ideas_ideas1_idx` (`idea_id`),
  KEY `fk_shopping_cart_has_ideas_shopping_cart1_idx` (`shopping_cart_id`),
  CONSTRAINT `fk_shopping_cart_has_ideas_ideas1` FOREIGN KEY (`idea_id`) REFERENCES `ideas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_shopping_cart_has_ideas_shopping_cart1` FOREIGN KEY (`shopping_cart_id`) REFERENCES `shopping_cart` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shopping_cart_has_ideas`
--

LOCK TABLES `shopping_cart_has_ideas` WRITE;
/*!40000 ALTER TABLE `shopping_cart_has_ideas` DISABLE KEYS */;
/*!40000 ALTER TABLE `shopping_cart_has_ideas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `states`
--

DROP TABLE IF EXISTS `states`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `states` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(2) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `states`
--

LOCK TABLES `states` WRITE;
/*!40000 ALTER TABLE `states` DISABLE KEYS */;
/*!40000 ALTER TABLE `states` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tags`
--

DROP TABLE IF EXISTS `tags`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tags` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_tags_categories1_idx` (`category_id`),
  CONSTRAINT `fk_tags_categories1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tags`
--

LOCK TABLES `tags` WRITE;
/*!40000 ALTER TABLE `tags` DISABLE KEYS */;
INSERT INTO `tags` VALUES (1,'Greece',4,NULL,NULL),(2,'Rome',4,NULL,NULL),(3,'Germany',4,NULL,NULL),(4,'America',4,NULL,NULL),(5,'Ethics',2,NULL,NULL),(6,'Metaphysics',2,NULL,NULL),(7,'Epistemology',2,NULL,NULL),(8,'Aesthetics',2,NULL,NULL),(9,'Political',2,NULL,NULL),(10,'Ancient',3,NULL,NULL),(11,'Medieval',3,NULL,NULL),(12,'Modern',3,NULL,NULL),(13,'Aristotle',1,NULL,NULL),(14,'Plato',1,NULL,NULL),(15,'Socrates',1,NULL,NULL),(16,'Berkeley',1,NULL,NULL),(17,'Bacon',1,NULL,NULL),(18,'Chomsky',1,NULL,NULL),(19,'Hobbes',1,NULL,NULL),(20,'Descartes',1,NULL,NULL),(21,'Gettier',1,NULL,NULL),(22,'Locke',1,NULL,NULL),(23,'Wittgenstein',1,NULL,NULL),(24,'Hume',1,NULL,NULL),(25,'Kant',1,NULL,NULL),(26,'Kierkegaard',1,NULL,NULL),(27,'Russell',1,NULL,NULL),(28,'Avicenna',1,NULL,NULL),(29,'Bentham',1,NULL,NULL),(30,'Camus',1,NULL,NULL),(31,'Sartre',1,NULL,NULL),(32,'Epicurus',1,NULL,NULL),(33,'Mill',1,NULL,NULL),(34,'Nietzsche',1,NULL,NULL),(35,'Pascal',1,NULL,NULL),(36,'Rousseau',1,NULL,NULL),(37,'Marcus Aurelius',1,NULL,NULL),(38,'Seneca',1,NULL,NULL),(39,'Spinoza',1,NULL,NULL),(40,'Protagoras',1,NULL,NULL),(41,'Schopenhauer',1,NULL,NULL),(42,'Dewey',1,NULL,NULL),(43,'James',1,NULL,NULL),(44,'Emerson',1,NULL,NULL),(45,'Foucault',1,NULL,NULL),(46,'Longinus',1,NULL,NULL),(47,'England',4,NULL,NULL),(48,'Aquinas',1,NULL,NULL),(49,'Antisthenes',1,NULL,NULL),(50,'Diogenes',1,NULL,NULL),(51,'Marx',1,NULL,NULL),(52,'More',1,NULL,NULL),(53,'Engels',1,NULL,NULL),(54,'Smith',1,NULL,NULL),(55,'Rousseau',1,NULL,NULL),(56,'Thoreau',1,NULL,NULL),(57,'Pyrrho',1,NULL,NULL),(58,'France',4,NULL,NULL),(59,'Vienna Circle',4,NULL,NULL),(60,'Schelling',1,NULL,NULL),(61,'Husserl',1,NULL,NULL),(62,'Lévi-Strauss',1,NULL,NULL);
/*!40000 ALTER TABLE `tags` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tags_has_images`
--

DROP TABLE IF EXISTS `tags_has_images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tags_has_images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tag_id` int(11) DEFAULT NULL,
  `image_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tags_has_images`
--

LOCK TABLES `tags_has_images` WRITE;
/*!40000 ALTER TABLE `tags_has_images` DISABLE KEYS */;
/*!40000 ALTER TABLE `tags_has_images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_levels`
--

DROP TABLE IF EXISTS `user_levels`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_levels` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_level` int(11) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_levels`
--

LOCK TABLES `user_levels` WRITE;
/*!40000 ALTER TABLE `user_levels` DISABLE KEYS */;
INSERT INTO `user_levels` VALUES (1,1,'normal',NULL,NULL),(2,5,'admin',NULL,NULL),(3,9,'super_admin',NULL,NULL);
/*!40000 ALTER TABLE `user_levels` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `shopping_cart_id` int(11) NOT NULL,
  `user_level_id` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_users_shopping_cart1_idx1` (`shopping_cart_id`),
  KEY `fk_users_user_levels1_idx` (`user_level_id`),
  CONSTRAINT `fk_users_shopping_cart1` FOREIGN KEY (`shopping_cart_id`) REFERENCES `shopping_cart` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_users_user_levels1` FOREIGN KEY (`user_level_id`) REFERENCES `user_levels` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-07-22  8:33:27
