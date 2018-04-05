CREATE INDEX idx_question_author_id ON question USING btree (author_id);
CREATE INDEX idx_answer_author_id ON answer USING btree (author_id);
CREATE INDEX idx_answer_question_id ON answer USING btree (question_id);
CREATE INDEX idx_comment_author_id ON comment USING btree (author_id);
CREATE INDEX idx_member_score ON member USING btree (score);
CREATE INDEX idx_comment_question_id ON comment USING btree (question_id);
CREATE INDEX idx_comment_answer_id ON comment USING btree (answer_id);
CREATE INDEX idx_question_date ON question USING btree ("date");
CREATE INDEX idx_answer_date ON answer USING btree ("date");
CREATE INDEX question_search_index ON question USING GIST (search);
CREATE INDEX answer_search_index ON answer USING GIST (search);
