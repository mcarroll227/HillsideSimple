<label class="age-gate-label" for="age-gate-d"><?php _e('Day', 'age-gate'); ?></label>
<input type="text" name="age_gate[d]" id="age-gate-d" class="age-gate-input" value="<?php echo (isset($age['d']) ? $age['d'] : '') ?>" placeholder="<?php _e('DD', 'age-gate'); ?>" required minlength="2" maxlength="2" pattern="\d+" autocomplete="off">